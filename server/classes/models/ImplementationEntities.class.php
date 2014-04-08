<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class ImplementationEntities extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='ImplementationEntities';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='implementation_entities';
	const SQL_INSERT='INSERT INTO `implementation_entities` (`implementation_entity_id`,`name`,`initials`,`street_address`,`postal_code`,`email`,`phone_number`,`domain`,`url`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `implementation_entities` (`name`,`initials`,`street_address`,`postal_code`,`email`,`phone_number`,`domain`,`url`) VALUES (?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `implementation_entities` SET `implementation_entity_id`=?,`name`=?,`initials`=?,`street_address`=?,`postal_code`=?,`email`=?,`phone_number`=?,`domain`=?,`url`=? WHERE `implementation_entity_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `implementation_entities` WHERE `implementation_entity_id`=?';
	const SQL_DELETE_PK='DELETE FROM `implementation_entities` WHERE `implementation_entity_id`=?';
	const FIELD_IMPLEMENTATION_ENTITY_ID=665202410;
	const FIELD_NAME=157235915;
	const FIELD_INITIALS=551236079;
	const FIELD_STREET_ADDRESS=472010744;
	const FIELD_POSTAL_CODE=-1073403743;
	const FIELD_EMAIL=571380572;
	const FIELD_PHONE_NUMBER=-301481094;
	const FIELD_DOMAIN=506496260;
	const FIELD_URL=-1103299281;
	private static $PRIMARY_KEYS=array(self::FIELD_IMPLEMENTATION_ENTITY_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_IMPLEMENTATION_ENTITY_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>'implementation_entity_id',
		self::FIELD_NAME=>'name',
		self::FIELD_INITIALS=>'initials',
		self::FIELD_STREET_ADDRESS=>'street_address',
		self::FIELD_POSTAL_CODE=>'postal_code',
		self::FIELD_EMAIL=>'email',
		self::FIELD_PHONE_NUMBER=>'phone_number',
		self::FIELD_DOMAIN=>'domain',
		self::FIELD_URL=>'url');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>'implementationEntityId',
		self::FIELD_NAME=>'name',
		self::FIELD_INITIALS=>'initials',
		self::FIELD_STREET_ADDRESS=>'streetAddress',
		self::FIELD_POSTAL_CODE=>'postalCode',
		self::FIELD_EMAIL=>'email',
		self::FIELD_PHONE_NUMBER=>'phoneNumber',
		self::FIELD_DOMAIN=>'domain',
		self::FIELD_URL=>'url');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_INITIALS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STREET_ADDRESS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_POSTAL_CODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PHONE_NUMBER=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DOMAIN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_URL=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_INITIALS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_STREET_ADDRESS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_POSTAL_CODE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_PHONE_NUMBER=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_DOMAIN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_URL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>null,
		self::FIELD_NAME=>null,
		self::FIELD_INITIALS=>null,
		self::FIELD_STREET_ADDRESS=>null,
		self::FIELD_POSTAL_CODE=>null,
		self::FIELD_EMAIL=>null,
		self::FIELD_PHONE_NUMBER=>null,
		self::FIELD_DOMAIN=>null,
		self::FIELD_URL=>null);
	private $implementationEntityId;
	private $name;
	private $initials;
	private $streetAddress;
	private $postalCode;
	private $email;
	private $phoneNumber;
	private $domain;
	private $url;

	/**
	 * set value for implementation_entity_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $implementationEntityId
	 */
	public function setImplementationEntityId($implementationEntityId) {
		$this->notifyChanged(self::FIELD_IMPLEMENTATION_ENTITY_ID,$this->implementationEntityId,$implementationEntityId);
		$this->implementationEntityId=$implementationEntityId;
	}

	/**
	 * get value for implementation_entity_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getImplementationEntityId() {
		return $this->implementationEntityId;
	}

	/**
	 * set value for name 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->notifyChanged(self::FIELD_NAME,$this->name,$name);
		$this->name=$name;
	}

	/**
	 * get value for name 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * set value for initials 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $initials
	 */
	public function setInitials($initials) {
		$this->notifyChanged(self::FIELD_INITIALS,$this->initials,$initials);
		$this->initials=$initials;
	}

	/**
	 * get value for initials 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getInitials() {
		return $this->initials;
	}

	/**
	 * set value for street_address 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $streetAddress
	 */
	public function setStreetAddress($streetAddress) {
		$this->notifyChanged(self::FIELD_STREET_ADDRESS,$this->streetAddress,$streetAddress);
		$this->streetAddress=$streetAddress;
	}

	/**
	 * get value for street_address 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getStreetAddress() {
		return $this->streetAddress;
	}

	/**
	 * set value for postal_code 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $postalCode
	 */
	public function setPostalCode($postalCode) {
		$this->notifyChanged(self::FIELD_POSTAL_CODE,$this->postalCode,$postalCode);
		$this->postalCode=$postalCode;
	}

	/**
	 * get value for postal_code 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}

	/**
	 * set value for email 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $email
	 */
	public function setEmail($email) {
		$this->notifyChanged(self::FIELD_EMAIL,$this->email,$email);
		$this->email=$email;
	}

	/**
	 * get value for email 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * set value for phone_number 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $phoneNumber
	 */
	public function setPhoneNumber($phoneNumber) {
		$this->notifyChanged(self::FIELD_PHONE_NUMBER,$this->phoneNumber,$phoneNumber);
		$this->phoneNumber=$phoneNumber;
	}

	/**
	 * get value for phone_number 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getPhoneNumber() {
		return $this->phoneNumber;
	}

	/**
	 * set value for domain 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $domain
	 */
	public function setDomain($domain) {
		$this->notifyChanged(self::FIELD_DOMAIN,$this->domain,$domain);
		$this->domain=$domain;
	}

	/**
	 * get value for domain 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * set value for url 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $url
	 */
	public function setUrl($url) {
		$this->notifyChanged(self::FIELD_URL,$this->url,$url);
		$this->url=$url;
	}

	/**
	 * get value for url 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getUrl() {
		return $this->url;
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
			self::FIELD_IMPLEMENTATION_ENTITY_ID=>$this->getImplementationEntityId(),
			self::FIELD_NAME=>$this->getName(),
			self::FIELD_INITIALS=>$this->getInitials(),
			self::FIELD_STREET_ADDRESS=>$this->getStreetAddress(),
			self::FIELD_POSTAL_CODE=>$this->getPostalCode(),
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_PHONE_NUMBER=>$this->getPhoneNumber(),
			self::FIELD_DOMAIN=>$this->getDomain(),
			self::FIELD_URL=>$this->getUrl());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_IMPLEMENTATION_ENTITY_ID=>$this->getImplementationEntityId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of ImplementationEntities instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param ImplementationEntities $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ImplementationEntities[]
	 */
	public static function findByExample(PDO $db,ImplementationEntities $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of ImplementationEntities instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return ImplementationEntities[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `implementation_entities`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of ImplementationEntities instances
	 *
	 * @param PDOStatement $stmt
	 * @return ImplementationEntities[]
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
	 * returns the result as an array of ImplementationEntities instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return ImplementationEntities[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new ImplementationEntities();
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
	 * Execute select query and return matched rows as an array of ImplementationEntities instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return ImplementationEntities[]
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
		$sql='DELETE FROM `implementation_entities`'
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
		$this->setImplementationEntityId($result['implementation_entity_id']);
		$this->setName($result['name']);
		$this->setInitials($result['initials']);
		$this->setStreetAddress($result['street_address']);
		$this->setPostalCode($result['postal_code']);
		$this->setEmail($result['email']);
		$this->setPhoneNumber($result['phone_number']);
		$this->setDomain($result['domain']);
		$this->setUrl($result['url']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return ImplementationEntities
	 */
	public static function findById(PDO $db,$implementationEntityId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$implementationEntityId);
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
		$o=new ImplementationEntities();
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
		$stmt->bindValue(1,$this->getImplementationEntityId());
		$stmt->bindValue(2,$this->getName());
		$stmt->bindValue(3,$this->getInitials());
		$stmt->bindValue(4,$this->getStreetAddress());
		$stmt->bindValue(5,$this->getPostalCode());
		$stmt->bindValue(6,$this->getEmail());
		$stmt->bindValue(7,$this->getPhoneNumber());
		$stmt->bindValue(8,$this->getDomain());
		$stmt->bindValue(9,$this->getUrl());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getImplementationEntityId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getName());
			$stmt->bindValue(2,$this->getInitials());
			$stmt->bindValue(3,$this->getStreetAddress());
			$stmt->bindValue(4,$this->getPostalCode());
			$stmt->bindValue(5,$this->getEmail());
			$stmt->bindValue(6,$this->getPhoneNumber());
			$stmt->bindValue(7,$this->getDomain());
			$stmt->bindValue(8,$this->getUrl());
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
			$this->setImplementationEntityId($lastInsertId);
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
		$stmt->bindValue(10,$this->getImplementationEntityId());
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
		$stmt->bindValue(1,$this->getImplementationEntityId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch EduAdmins's which this ImplementationEntities references.
	 * `implementation_entities`.`implementation_entity_id` -> `edu_admins`.`implementation_entity_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return EduAdmins[]
	 */
	public function fetchEduAdminsCollection(PDO $db, $sort=null) {
		$filter=array(EduAdmins::FIELD_IMPLEMENTATION_ENTITY_ID=>$this->getImplementationEntityId());
		return EduAdmins::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Units's which this ImplementationEntities references.
	 * `implementation_entities`.`implementation_entity_id` -> `units`.`implementation_entity_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Units[]
	 */
	public function fetchUnitsCollection(PDO $db, $sort=null) {
		$filter=array(Units::FIELD_IMPLEMENTATION_ENTITY_ID=>$this->getImplementationEntityId());
		return Units::findByFilter($db, $filter, true, $sort);
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'ImplementationEntities');
	}

	/**
	 * get single ImplementationEntities instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return ImplementationEntities
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new ImplementationEntities();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of ImplementationEntities from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return ImplementationEntities[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('ImplementationEntities') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>