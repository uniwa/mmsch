<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class Relations extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Relations';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='relations';
	const SQL_INSERT='INSERT INTO `relations` (`relation_id`,`host_mm_id`,`guest_mm_id`,`relation_state`,`true_date`,`true_fek`,`false_date`,`false_fek`,`relation_type_id`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `relations` (`host_mm_id`,`guest_mm_id`,`relation_state`,`true_date`,`true_fek`,`false_date`,`false_fek`,`relation_type_id`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `relations` SET `relation_id`=?,`host_mm_id`=?,`guest_mm_id`=?,`relation_state`=?,`true_date`=?,`true_fek`=?,`false_date`=?,`false_fek`=?,`relation_type_id`=? WHERE `relation_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `relations` WHERE `relation_id`=?';
	const SQL_DELETE_PK='DELETE FROM `relations` WHERE `relation_id`=?';
	const FIELD_RELATION_ID=603203783;
	const FIELD_HOST_MM_ID=1290912538;
	const FIELD_GUEST_MM_ID=830509436;
	const FIELD_RELATION_STATE=-89458331;
	const FIELD_TRUE_DATE=-803713912;
	const FIELD_TRUE_FEK=-580113550;
	const FIELD_FALSE_DATE=1174803873;
	const FIELD_FALSE_FEK=176446265;
	const FIELD_RELATION_TYPE_ID=973942804;
	private static $PRIMARY_KEYS=array(self::FIELD_RELATION_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_RELATION_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_RELATION_ID=>'relation_id',
		self::FIELD_HOST_MM_ID=>'host_mm_id',
		self::FIELD_GUEST_MM_ID=>'guest_mm_id',
		self::FIELD_RELATION_STATE=>'relation_state',
		self::FIELD_TRUE_DATE=>'true_date',
		self::FIELD_TRUE_FEK=>'true_fek',
		self::FIELD_FALSE_DATE=>'false_date',
		self::FIELD_FALSE_FEK=>'false_fek',
		self::FIELD_RELATION_TYPE_ID=>'relation_type_id');
	private static $PROPERTY_NAMES=array(
		self::FIELD_RELATION_ID=>'relationId',
		self::FIELD_HOST_MM_ID=>'hostMmId',
		self::FIELD_GUEST_MM_ID=>'guestMmId',
		self::FIELD_RELATION_STATE=>'relationState',
		self::FIELD_TRUE_DATE=>'trueDate',
		self::FIELD_TRUE_FEK=>'trueFek',
		self::FIELD_FALSE_DATE=>'falseDate',
		self::FIELD_FALSE_FEK=>'falseFek',
		self::FIELD_RELATION_TYPE_ID=>'relationTypeId');
	private static $PROPERTY_TYPES=array(
		self::FIELD_RELATION_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_HOST_MM_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_GUEST_MM_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_RELATION_STATE=>Db2PhpEntity::PHP_TYPE_BOOL,
		self::FIELD_TRUE_DATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TRUE_FEK=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FALSE_DATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FALSE_FEK=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_RELATION_TYPE_ID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_RELATION_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_HOST_MM_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_GUEST_MM_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_RELATION_STATE=>array(Db2PhpEntity::JDBC_TYPE_BIT,0,0,true),
		self::FIELD_TRUE_DATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_TRUE_FEK=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_FALSE_DATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_FALSE_FEK=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_RELATION_TYPE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_RELATION_ID=>null,
		self::FIELD_HOST_MM_ID=>null,
		self::FIELD_GUEST_MM_ID=>null,
		self::FIELD_RELATION_STATE=>null,
		self::FIELD_TRUE_DATE=>null,
		self::FIELD_TRUE_FEK=>null,
		self::FIELD_FALSE_DATE=>null,
		self::FIELD_FALSE_FEK=>null,
		self::FIELD_RELATION_TYPE_ID=>null);
	private $relationId;
	private $hostMmId;
	private $guestMmId;
	private $relationState;
	private $trueDate;
	private $trueFek;
	private $falseDate;
	private $falseFek;
	private $relationTypeId;

	/**
	 * set value for relation_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $relationId
	 */
	public function setRelationId($relationId) {
		$this->notifyChanged(self::FIELD_RELATION_ID,$this->relationId,$relationId);
		$this->relationId=$relationId;
	}

	/**
	 * get value for relation_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getRelationId() {
		return $this->relationId;
	}

	/**
	 * set value for host_mm_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $hostMmId
	 */
	public function setHostMmId($hostMmId) {
		$this->notifyChanged(self::FIELD_HOST_MM_ID,$this->hostMmId,$hostMmId);
		$this->hostMmId=$hostMmId;
	}

	/**
	 * get value for host_mm_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getHostMmId() {
		return $this->hostMmId;
	}

	/**
	 * set value for guest_mm_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $guestMmId
	 */
	public function setGuestMmId($guestMmId) {
		$this->notifyChanged(self::FIELD_GUEST_MM_ID,$this->guestMmId,$guestMmId);
		$this->guestMmId=$guestMmId;
	}

	/**
	 * get value for guest_mm_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getGuestMmId() {
		return $this->guestMmId;
	}

	/**
	 * set value for relation_state 
	 *
	 * type:BIT,size:0,default:null,nullable
	 *
	 * @param mixed $relationState
	 */
	public function setRelationState($relationState) {
		$this->notifyChanged(self::FIELD_RELATION_STATE,$this->relationState,$relationState);
		$this->relationState=$relationState;
	}

	/**
	 * get value for relation_state 
	 *
	 * type:BIT,size:0,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRelationState() {
		return $this->relationState;
	}

	/**
	 * set value for true_date 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @param mixed $trueDate
	 */
	public function setTrueDate($trueDate) {
		$this->notifyChanged(self::FIELD_TRUE_DATE,$this->trueDate,$trueDate);
		$this->trueDate=$trueDate;
	}

	/**
	 * get value for true_date 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getTrueDate() {
		return $this->trueDate;
	}

	/**
	 * set value for true_fek 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $trueFek
	 */
	public function setTrueFek($trueFek) {
		$this->notifyChanged(self::FIELD_TRUE_FEK,$this->trueFek,$trueFek);
		$this->trueFek=$trueFek;
	}

	/**
	 * get value for true_fek 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getTrueFek() {
		return $this->trueFek;
	}

	/**
	 * set value for false_date 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @param mixed $falseDate
	 */
	public function setFalseDate($falseDate) {
		$this->notifyChanged(self::FIELD_FALSE_DATE,$this->falseDate,$falseDate);
		$this->falseDate=$falseDate;
	}

	/**
	 * get value for false_date 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getFalseDate() {
		return $this->falseDate;
	}

	/**
	 * set value for false_fek 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $falseFek
	 */
	public function setFalseFek($falseFek) {
		$this->notifyChanged(self::FIELD_FALSE_FEK,$this->falseFek,$falseFek);
		$this->falseFek=$falseFek;
	}

	/**
	 * get value for false_fek 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getFalseFek() {
		return $this->falseFek;
	}

	/**
	 * set value for relation_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $relationTypeId
	 */
	public function setRelationTypeId($relationTypeId) {
		$this->notifyChanged(self::FIELD_RELATION_TYPE_ID,$this->relationTypeId,$relationTypeId);
		$this->relationTypeId=$relationTypeId;
	}

	/**
	 * get value for relation_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getRelationTypeId() {
		return $this->relationTypeId;
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
			self::FIELD_RELATION_ID=>$this->getRelationId(),
			self::FIELD_HOST_MM_ID=>$this->getHostMmId(),
			self::FIELD_GUEST_MM_ID=>$this->getGuestMmId(),
			self::FIELD_RELATION_STATE=>$this->getRelationState(),
			self::FIELD_TRUE_DATE=>$this->getTrueDate(),
			self::FIELD_TRUE_FEK=>$this->getTrueFek(),
			self::FIELD_FALSE_DATE=>$this->getFalseDate(),
			self::FIELD_FALSE_FEK=>$this->getFalseFek(),
			self::FIELD_RELATION_TYPE_ID=>$this->getRelationTypeId());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_RELATION_ID=>$this->getRelationId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of Relations instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Relations $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Relations[]
	 */
	public static function findByExample(PDO $db,Relations $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of Relations instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Relations[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `relations`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Relations instances
	 *
	 * @param PDOStatement $stmt
	 * @return Relations[]
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
	 * returns the result as an array of Relations instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Relations[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Relations();
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
	 * Execute select query and return matched rows as an array of Relations instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Relations[]
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
		$sql='DELETE FROM `relations`'
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
		$this->setRelationId($result['relation_id']);
		$this->setHostMmId($result['host_mm_id']);
		$this->setGuestMmId($result['guest_mm_id']);
		$this->setRelationState($result['relation_state']);
		$this->setTrueDate($result['true_date']);
		$this->setTrueFek($result['true_fek']);
		$this->setFalseDate($result['false_date']);
		$this->setFalseFek($result['false_fek']);
		$this->setRelationTypeId($result['relation_type_id']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Relations
	 */
	public static function findById(PDO $db,$relationId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$relationId);
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
		$o=new Relations();
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
		$stmt->bindValue(1,$this->getRelationId());
		$stmt->bindValue(2,$this->getHostMmId());
		$stmt->bindValue(3,$this->getGuestMmId());
		$stmt->bindValue(4,$this->getRelationState());
		$stmt->bindValue(5,$this->getTrueDate());
		$stmt->bindValue(6,$this->getTrueFek());
		$stmt->bindValue(7,$this->getFalseDate());
		$stmt->bindValue(8,$this->getFalseFek());
		$stmt->bindValue(9,$this->getRelationTypeId());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getRelationId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getHostMmId());
			$stmt->bindValue(2,$this->getGuestMmId());
			$stmt->bindValue(3,$this->getRelationState());
			$stmt->bindValue(4,$this->getTrueDate());
			$stmt->bindValue(5,$this->getTrueFek());
			$stmt->bindValue(6,$this->getFalseDate());
			$stmt->bindValue(7,$this->getFalseFek());
			$stmt->bindValue(8,$this->getRelationTypeId());
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
			$this->setRelationId($lastInsertId);
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
		$stmt->bindValue(10,$this->getRelationId());
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
		$stmt->bindValue(1,$this->getRelationId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch RelationTypes which references this Relations. Will return null in case reference is invalid.
	 * `relations`.`relation_type_id` -> `relation_types`.`relation_type_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return RelationTypes
	 */
	public function fetchRelationTypes(PDO $db, $sort=null) {
		$filter=array(RelationTypes::FIELD_RELATION_TYPE_ID=>$this->getRelationTypeId());
		$result=RelationTypes::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Units which references this Relations. Will return null in case reference is invalid.
	 * `relations`.`guest_mm_id` -> `units`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Units
	 */
	public function fetchUnits(PDO $db, $sort=null) {
		$filter=array(Units::FIELD_MM_ID=>$this->getGuestMmId());
		$result=Units::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Units1 which references this Relations. Will return null in case reference is invalid.
	 * `relations`.`host_mm_id` -> `units`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Units1
	 */
	public function fetchUnits1(PDO $db, $sort=null) {
		$filter=array(Units1::FIELD_MM_ID=>$this->getHostMmId());
		$result=Units1::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Relations');
	}

	/**
	 * get single Relations instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Relations
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Relations();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Relations from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Relations[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Relations') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>