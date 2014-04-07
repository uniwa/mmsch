<?php
/**
*
* @version 1.0.3
* @author  ΤΕΙ Αθήνας
* @package server\classes
*/

require_once('classes/models/Groups.class.php');

class GroupsExt extends Groups
{
    private static $rowsArray ;
    private static $objsArray ;
        
    public function __construct(PDO $db) 
    {
        if ( ( ! is_array( self::$rowsArray ) ) && $db ) 
        {
           //self::getAll($db, null);
        }
    }

    public function getRowsArray($unitId=0, $levelId=0)
    {
        if ($unitId && $levelId)
            return self::$rowsArray[$unitId][$levelId];
        else if ($unitId)
            return self::$rowsArray[$unitId];
        else
            return self::$rowsArray;
    }
        
    public function getObjsArray($unitId=0, $levelId=0) 
    {
        if ($unitId && $levelId)
            return self::$objsArray[$unitId][$levelId];
        else if ($unitId)
            return self::$objsArray[$unitId];
        else
            return self::$objsArray;
    }
        
    public static function getAll(PDO $db, $filter, $and=true, $sort=null) 
    {
        self::$rowsArray = array();
        self::$objsArray = array();
        
        $objs = self::findByFilter($db, $filter, $and, $sort);

        foreach($objs as $obj)
        {
            self::$rowsArray[$obj->getGroupId()] = $obj->getName(); 
            self::$objsArray[$obj->getGroupId()] = $obj; 
        }
    }
    
    public static function getAllByUnit(PDO $db, $filter, $and=true, $sort=null) 
    {
        self::$rowsArray = array();
        self::$objsArray = array();
        
        $objs = self::findByFilter($db, $filter, $and, $sort);

        foreach($objs as $obj)
        {
            self::$rowsArray[$obj->getMmId()][$obj->getGroupId()] = $obj->getName(); 
            self::$objsArray[$obj->getMmId()][$obj->getGroupId()] = $obj; 
        }
    }
    
    public static function getAllByUnitAndLevel(PDO $db, $filter, $and=true, $sort=null) 
    {
        self::$rowsArray = array();
        self::$objsArray = array();
        
        $objs = self::findByFilter($db, $filter, $and, $sort);

        foreach($objs as $obj)
        {
            self::$rowsArray[$obj->getMmId()][$obj->getLevelId()][$obj->getGroupId()] = $obj->getName(); 
            self::$objsArray[$obj->getMmId()][$obj->getLevelId()][$obj->getGroupId()] = $obj; 
        }
    }
    
    public function getAllWithLimit(PDO $db, $filter, $and=true, $sort=null, $page=null, $pagesize=null)
    {
        self::$rowsArray = array();
        self::$objsArray = array();
        
        $objs = self::findByFilterWithLimit($db, $filter, $and, $sort, $page, $pagesize);

        foreach($objs as $obj)
        {
            self::$rowsArray[$obj->getGroupId()] = $obj->getName(); 
            self::$objsArray[$obj->getGroupId()] = $obj; 
        }
    }
    
    public function searchArrayForID($id, $unitId=0, $levelId=0)
    {
        if ($unitId && $levelId)
            $obj = self::$objsArray[$unitId][$levelId][$id];
        else if ($unitId)
            $obj = self::$objsArray[$unitId][$id];
        else
            $obj = self::$objsArray[$id];
        
        if ($obj)
            $this->assignByArray($obj->toArray());
        else
            $this->assignDefaultValues ();
        
        return $this;
    }
    
    public function searchArrayForValue($name, $unitId=0, $levelId=0)
    {
        if ($unitId && $levelId)
            $id = array_search($name, $this->getRowsArray($unitId, $levelId));
        else if ($unitId)
            $id = array_search($name, $this->getRowsArray($unitId));
        else
            $id = array_search($name, $this->getRowsArray());
                
        $obj = self::$objsArray[$id];
        
        if ($obj)
        {
            $this->assignByArray($obj->toArray());
        }
        
        return $this;
    }
        
    public static function findByFilterWithLimit(PDO $db, $filter, $and=true, $sort=null, $page=null, $pagesize=null) 
    {
        global $Options;
    
        if (!($filter instanceof DFCInterface)) 
        {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `'.self::SQL_TABLE_NAME.'`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

        if ($pagesize && ($pagesize <> $Options["AllPageSize"]))
        {
            $page = $page ? ($page - 1) * $pagesize : 0;
            $sql .=' LIMIT '.$page.', '.$pagesize;
        }

        $stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
        
		return self::fromStatement($stmt);
	}

    public static function findByFilterAsCount(PDO $db, $filter, $and=true) 
    {
        $fieldNames = array_values(self::getFieldNames());

        if (!($filter instanceof DFCInterface)) 
        {
            $filter=new DFCAggregate($filter, $and);
        }
        $sql='SELECT count(*) as '.$fieldNames[0].' FROM `'.self::SQL_TABLE_NAME.'`'
        . self::buildSqlWhere($filter, $and, false, true);

        $stmt=self::prepareStatement($db, $sql);
        self::bindValuesForFilter($stmt, $filter);
 
        return self::fromStatement($stmt);
    }
    
    public function existsInDatabase(PDO $db) 
    {
        $filter=array();
        foreach ($this->getPrimaryKeyValues() as $fieldId=>$value) {
            $filter[]=new DFC($fieldId, $value, DFC::EXACT);
        }
        return 0!=count(self::findByFilter($db, $filter, true));
    }
}
?>