<?php
require_once('classes/models/Units.class.php');

class UnitsExt extends Units
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
            $this->rowsArray[$obj->getMmId()] = $obj->getName(); 
            $this->objsArray[$obj->getMmId()] = $obj; 
        }
    }
    
    public function getAllWithLimit(PDO $db, $filter, $and=true, $sort=null, $page=null, $pagesize=null)
    {
        $this->rowsArray = array();
        $this->objsArray = array();
        
        $objs = self::findByFilterWithLimit($db, $filter, $and, $sort, $page, $pagesize);

        foreach($objs as $obj)
        {
            $this->rowsArray[$obj->getMmId()] = $obj->getName(); 
            $this->objsArray[$obj->getMmId()] = $obj; 
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
    
    public static function findByExampleWithLimit(PDO $db,UnitsModel $example, $and=true, $sort=null, $start=null, $count=null) {
        $exampleValues=$example->toArray();
        $filter=array();
        foreach ($exampleValues as $fieldId=>$value) {
            if (null!==$value) {
                    $filter[$fieldId]=$value;
            }
        }
        return self::findByFilterWithLimit($db, $filter, $and, $sort, $start, $count);
    }

    public function existsInDatabase(PDO $db) 
    {
        $filter=array();
        foreach (self::getPrimaryKeyValues() as $fieldId=>$value) {
            $filter[]=new DFC($fieldId, $value, DFC::EXACT);
        }
        return 0!=count(self::findByFilter($db, $filter, true));
    }
}
?>