<?php
/**
*
* @version 1.0.3
* @author  ΤΕΙ Αθήνας
* @package server\classes
*/

require_once('classes/models/Addrspaces.class.php');

class AddrspacesExt extends Addrspaces
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

    public function getRowsArray() 
    {
        return $this->rowsArray;
    }
        
    public function getObjsArray() 
    {
        return $this->objsArray;
    }
        
    public function getAll(PDO $db, $filter, $and=true, $sort=null) 
    {
        $this->rowsArray = array();
        $this->objsArray = array();
        
        $objs = self::findByFilter($db, $filter, $and, $sort);

        foreach($objs as $obj)
        {
            $this->rowsArray[$obj->getAddrspaceId()] = $obj->getAddrspaceId(); 
            $this->objsArray[$obj->getAddrspaceId()] = $obj; 
        }
    }
    
    public function getAllWithLimit(PDO $db, $filter, $and=true, $sort=null, $page=null, $pagesize=null)
    {
        $this->rowsArray = array();
        $this->objsArray = array();
        
        $objs = self::findByFilterWithLimit($db, $filter, $and, $sort, $page, $pagesize);

        foreach($objs as $obj)
        {
            $this->rowsArray[$obj->getAddrspaceId()] = $obj->getAddrspaceId(); 
            $this->objsArray[$obj->getAddrspaceId()] = $obj; 
        }
    }
    
    public function searchArrayForID($id)
    {
        $obj = $this->objsArray[$id];
        
        if ($obj)
            $this->assignByArray($obj->toArray());
        else
            $this->assignDefaultValues ();
        
        return $this;
    }
    
    public function searchArrayForValue($name)
    {
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