<?php
/**
*
* @version 1.0.3
* @author  ΤΕΙ Αθήνας
* @package server\classes
*/

require_once('classes/models/Transitions.class.php');

class TransitionsExt extends Transitions
{
    private $rowsArray;
    private $objsArray;
        
    public function __construct(PDO $db) 
    {
        if ( ( ! is_array( $this->rowsArray ) ) && $db ) 
        {
           //self::getAll($db, null);
        }
    }

    public function getRowsArray($unitId=0)
    {
        if ($unitId)
            return $this->rowsArray[$unitId];
        else
            return $this->rowsArray;
    }
        
    public function getObjsArray($unitId=0) 
    {
        if ($unitId)
            return $this->objsArray[$unitId];
        else
            return $this->objsArray;
    }
         
    public function getAll(PDO $db, $filter, $and=true, $sort=null) 
    {
        $this->rowsArray = array();
        $this->objsArray = array();
        
        $objs = self::findByFilter($db, $filter, $and, $sort);

        foreach($objs as $obj)
        {
            $this->rowsArray[$obj->getTransitionId()] = $obj->getTransitionId(); 
            $this->objsArray[$obj->getTransitionId()] = $obj; 
        }
    }
    
    public function getAllByUnit(PDO $db, $filter, $and=true, $sort=null) 
    {
        $this->rowsArray = array();
        $this->objsArray = array();
        
        $objs = self::findByFilter($db, $filter, $and, $sort);

        foreach($objs as $obj)
        {
            $this->rowsArray[$obj->getMmId()][$obj->getTransitionId()] = $obj->getTransitionId(); 
            $this->objsArray[$obj->getMmId()][$obj->getTransitionId()] = $obj; 
        }
    }
    
    public function getAllWithLimit(PDO $db, $filter, $and=true, $sort=null, $page=null, $pagesize=null)
    {
        $this->rowsArray = array();
        $this->objsArray = array();
        
        $objs = self::findByFilterWithLimit($db, $filter, $and, $sort, $page, $pagesize);

        foreach($objs as $obj)
        {
            $this->rowsArray[$obj->getTransitionId()] = $obj->getTransitionId(); 
            $this->objsArray[$obj->getTransitionId()] = $obj; 
        }
    }
    
    public function searchArrayForID($id, $unitId=0)
    {
        if ($unitId)
            $obj = $this->objsArray[$unitId][$id];
        else
            $obj = $this->objsArray[$id];
        
        if ($obj)
            $this->assignByArray($obj->toArray());
        else
            $this->assignDefaultValues ();
        
        return $this;
    }
    
    public function searchArrayForValue($name, $unitId=0)
    {
        if ($unitId)
            $id = array_search($name, $this->getRowsArray($unitId));
        else
            $id = array_search($name, $this->getRowsArray());
                
        $obj = $this->objsArray[$id];
        
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