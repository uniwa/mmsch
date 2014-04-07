<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class Transitions extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Transitions';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='transitions';
	const SQL_INSERT='INSERT INTO `transitions` (`transition_id`,`fek`,`transition_date`,`mm_id`,`from_state_id`,`to_state_id`) VALUES (?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `transitions` (`fek`,`transition_date`,`mm_id`,`from_state_id`,`to_state_id`) VALUES (?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `transitions` SET `transition_id`=?,`fek`=?,`transition_date`=?,`mm_id`=?,`from_state_id`=?,`to_state_id`=? WHERE `transition_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `transitions` WHERE `transition_id`=?';
	const SQL_DELETE_PK='DELETE FROM `transitions` WHERE `transition_id`=?';
	const FIELD_TRANSITION_ID=676338709;
	const FIELD_FEK=-1957190820;
	const FIELD_TRANSITION_DATE=1421289512;
	const FIELD_MM_ID=341992426;
	const FIELD_FROM_STATE_ID=-1184054194;
	const FIELD_TO_STATE_ID=710515869;
	private static $PRIMARY_KEYS=array(self::FIELD_TRANSITION_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_TRANSITION_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_TRANSITION_ID=>'transition_id',
		self::FIELD_FEK=>'fek',
		self::FIELD_TRANSITION_DATE=>'transition_date',
		self::FIELD_MM_ID=>'mm_id',
		self::FIELD_FROM_STATE_ID=>'from_state_id',
		self::FIELD_TO_STATE_ID=>'to_state_id');
	private static $PROPERTY_NAMES=array(
		self::FIELD_TRANSITION_ID=>'transitionId',
		self::FIELD_FEK=>'fek',
		self::FIELD_TRANSITION_DATE=>'transitionDate',
		self::FIELD_MM_ID=>'mmId',
		self::FIELD_FROM_STATE_ID=>'fromStateId',
		self::FIELD_TO_STATE_ID=>'toStateId');
	private static $PROPERTY_TYPES=array(
		self::FIELD_TRANSITION_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FEK=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TRANSITION_DATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MM_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FROM_STATE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TO_STATE_ID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_TRANSITION_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_FEK=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_TRANSITION_DATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_MM_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_FROM_STATE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_TO_STATE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_TRANSITION_ID=>null,
		self::FIELD_FEK=>null,
		self::FIELD_TRANSITION_DATE=>null,
		self::FIELD_MM_ID=>null,
		self::FIELD_FROM_STATE_ID=>null,
		self::FIELD_TO_STATE_ID=>null);
	private $transitionId;
	private $fek;
	private $transitionDate;
	private $mmId;
	private $fromStateId;
	private $toStateId;

	/**
	 * set value for transition_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $transitionId
	 */
	public function setTransitionId($transitionId) {
		$this->notifyChanged(self::FIELD_TRANSITION_ID,$this->transitionId,$transitionId);
		$this->transitionId=$transitionId;
	}

	/**
	 * get value for transition_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getTransitionId() {
		return $this->transitionId;
	}

	/**
	 * set value for fek 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $fek
	 */
	public function setFek($fek) {
		$this->notifyChanged(self::FIELD_FEK,$this->fek,$fek);
		$this->fek=$fek;
	}

	/**
	 * get value for fek 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getFek() {
		return $this->fek;
	}

	/**
	 * set value for transition_date 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @param mixed $transitionDate
	 */
	public function setTransitionDate($transitionDate) {
		$this->notifyChanged(self::FIELD_TRANSITION_DATE,$this->transitionDate,$transitionDate);
		$this->transitionDate=$transitionDate;
	}

	/**
	 * get value for transition_date 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getTransitionDate() {
		return $this->transitionDate;
	}

	/**
	 * set value for mm_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $mmId
	 */
	public function setMmId($mmId) {
		$this->notifyChanged(self::FIELD_MM_ID,$this->mmId,$mmId);
		$this->mmId=$mmId;
	}

	/**
	 * get value for mm_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getMmId() {
		return $this->mmId;
	}

	/**
	 * set value for from_state_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $fromStateId
	 */
	public function setFromStateId($fromStateId) {
		$this->notifyChanged(self::FIELD_FROM_STATE_ID,$this->fromStateId,$fromStateId);
		$this->fromStateId=$fromStateId;
	}

	/**
	 * get value for from_state_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getFromStateId() {
		return $this->fromStateId;
	}

	/**
	 * set value for to_state_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $toStateId
	 */
	public function setToStateId($toStateId) {
		$this->notifyChanged(self::FIELD_TO_STATE_ID,$this->toStateId,$toStateId);
		$this->toStateId=$toStateId;
	}

	/**
	 * get value for to_state_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getToStateId() {
		return $this->toStateId;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_TRANSITION_ID=>$this->getTransitionId(),
			self::FIELD_FEK=>$this->getFek(),
			self::FIELD_TRANSITION_DATE=>$this->getTransitionDate(),
			self::FIELD_MM_ID=>$this->getMmId(),
			self::FIELD_FROM_STATE_ID=>$this->getFromStateId(),
			self::FIELD_TO_STATE_ID=>$this->getToStateId());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_TRANSITION_ID=>$this->getTransitionId());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (empty(self::$stmts[$statement][$dbInstanceId])) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}
	
	/**
	 * check if this instance exists in the database
	 *
	 * @param PDO $db
	 * @return bool
	 */
	public function existsInDatabase(PDO $db) {
		$filter=array();
		foreach ($this->getPrimaryKeyValues() as $fieldId=>$value) {
			$filter[]=new DFC($fieldId, $value, DFC::EXACT_NULLSAFE);
		}
		return 0!=count(self::findByFilter($db, $filter, true));
	}
	
	/**
	 * Update to database if exists, otherwise insert
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateInsertToDatabase(PDO $db) {
		if ($this->existsInDatabase($db)) {
			return $this->updateToDatabase($db);
		} else {
			return $this->insertIntoDatabase($db);
		}
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of Transitions instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Transitions $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Transitions[]
	 */
	public static function findByExample(PDO $db,Transitions $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of Transitions instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Transitions[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `transitions`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Transitions instances
	 *
	 * @param PDOStatement $stmt
	 * @return Transitions[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of Transitions instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Transitions[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Transitions();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of Transitions instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Transitions[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `transitions`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setTransitionId($result['transition_id']);
		$this->setFek($result['fek']);
		$this->setTransitionDate($result['transition_date']);
		$this->setMmId($result['mm_id']);
		$this->setFromStateId($result['from_state_id']);
		$this->setToStateId($result['to_state_id']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Transitions
	 */
	public static function findById(PDO $db,$transitionId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$transitionId);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new Transitions();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getTransitionId());
		$stmt->bindValue(2,$this->getFek());
		$stmt->bindValue(3,$this->getTransitionDate());
		$stmt->bindValue(4,$this->getMmId());
		$stmt->bindValue(5,$this->getFromStateId());
		$stmt->bindValue(6,$this->getToStateId());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getTransitionId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getFek());
			$stmt->bindValue(2,$this->getTransitionDate());
			$stmt->bindValue(3,$this->getMmId());
			$stmt->bindValue(4,$this->getFromStateId());
			$stmt->bindValue(5,$this->getToStateId());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setTransitionId($lastInsertId);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(7,$this->getTransitionId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getTransitionId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch States which references this Transitions. Will return null in case reference is invalid.
	 * `transitions`.`from_state_id` -> `states`.`state_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return States
	 */
	public function fetchStates(PDO $db, $sort=null) {
		$filter=array(States::FIELD_STATE_ID=>$this->getFromStateId());
		$result=States::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch States1 which references this Transitions. Will return null in case reference is invalid.
	 * `transitions`.`to_state_id` -> `states`.`state_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return States1
	 */
	public function fetchStates1(PDO $db, $sort=null) {
		$filter=array(States1::FIELD_STATE_ID=>$this->getToStateId());
		$result=States1::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Units which references this Transitions. Will return null in case reference is invalid.
	 * `transitions`.`mm_id` -> `units`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Units
	 */
	public function fetchUnits(PDO $db, $sort=null) {
		$filter=array(Units::FIELD_MM_ID=>$this->getMmId());
		$result=Units::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Transitions');
	}

	/**
	 * get single Transitions instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Transitions
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Transitions();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Transitions from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Transitions[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Transitions') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>