<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class UnitIpDns extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='UnitIpDns';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='unit_ip_dns';
	const SQL_INSERT='INSERT INTO `unit_ip_dns` (`ip_dns_id`,`unit_dns`,`router_dns`,`ext_dns`,`ip_lan`,`ip_lan_mask`,`ip_router`,`ip_nat`,`ip_nat_mask`,`username`,`password`,`mm_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `unit_ip_dns` (`unit_dns`,`router_dns`,`ext_dns`,`ip_lan`,`ip_lan_mask`,`ip_router`,`ip_nat`,`ip_nat_mask`,`username`,`password`,`mm_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `unit_ip_dns` SET `ip_dns_id`=?,`unit_dns`=?,`router_dns`=?,`ext_dns`=?,`ip_lan`=?,`ip_lan_mask`=?,`ip_router`=?,`ip_nat`=?,`ip_nat_mask`=?,`username`=?,`password`=?,`mm_id`=? WHERE `ip_dns_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `unit_ip_dns` WHERE `ip_dns_id`=?';
	const SQL_DELETE_PK='DELETE FROM `unit_ip_dns` WHERE `ip_dns_id`=?';
	const FIELD_IP_DNS_ID=569925575;
	const FIELD_UNIT_DNS=-1740033424;
	const FIELD_ROUTER_DNS=1270345013;
	const FIELD_EXT_DNS=171468617;
	const FIELD_IP_LAN=112046467;
	const FIELD_IP_LAN_MASK=204572712;
	const FIELD_IP_ROUTER=971736863;
	const FIELD_IP_NAT=112048395;
	const FIELD_IP_NAT_MASK=-432999008;
	const FIELD_USERNAME=-1713402024;
	const FIELD_PASSWORD=-230702819;
	const FIELD_MM_ID=422861016;
	private static $PRIMARY_KEYS=array(self::FIELD_IP_DNS_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_IP_DNS_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_IP_DNS_ID=>'ip_dns_id',
		self::FIELD_UNIT_DNS=>'unit_dns',
		self::FIELD_ROUTER_DNS=>'router_dns',
		self::FIELD_EXT_DNS=>'ext_dns',
		self::FIELD_IP_LAN=>'ip_lan',
		self::FIELD_IP_LAN_MASK=>'ip_lan_mask',
		self::FIELD_IP_ROUTER=>'ip_router',
		self::FIELD_IP_NAT=>'ip_nat',
		self::FIELD_IP_NAT_MASK=>'ip_nat_mask',
		self::FIELD_USERNAME=>'username',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_MM_ID=>'mm_id');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IP_DNS_ID=>'ipDnsId',
		self::FIELD_UNIT_DNS=>'unitDns',
		self::FIELD_ROUTER_DNS=>'routerDns',
		self::FIELD_EXT_DNS=>'extDns',
		self::FIELD_IP_LAN=>'ipLan',
		self::FIELD_IP_LAN_MASK=>'ipLanMask',
		self::FIELD_IP_ROUTER=>'ipRouter',
		self::FIELD_IP_NAT=>'ipNat',
		self::FIELD_IP_NAT_MASK=>'ipNatMask',
		self::FIELD_USERNAME=>'username',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_MM_ID=>'mmId');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IP_DNS_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_UNIT_DNS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ROUTER_DNS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EXT_DNS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IP_LAN=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IP_LAN_MASK=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_IP_ROUTER=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IP_NAT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IP_NAT_MASK=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_USERNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PASSWORD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MM_ID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_IP_DNS_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_UNIT_DNS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_ROUTER_DNS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_EXT_DNS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_IP_LAN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_IP_LAN_MASK=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_IP_ROUTER=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_IP_NAT=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_IP_NAT_MASK=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_USERNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_PASSWORD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_MM_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IP_DNS_ID=>null,
		self::FIELD_UNIT_DNS=>null,
		self::FIELD_ROUTER_DNS=>null,
		self::FIELD_EXT_DNS=>null,
		self::FIELD_IP_LAN=>null,
		self::FIELD_IP_LAN_MASK=>null,
		self::FIELD_IP_ROUTER=>null,
		self::FIELD_IP_NAT=>null,
		self::FIELD_IP_NAT_MASK=>null,
		self::FIELD_USERNAME=>null,
		self::FIELD_PASSWORD=>null,
		self::FIELD_MM_ID=>null);
	private $ipDnsId;
	private $unitDns;
	private $routerDns;
	private $extDns;
	private $ipLan;
	private $ipLanMask;
	private $ipRouter;
	private $ipNat;
	private $ipNatMask;
	private $username;
	private $password;
	private $mmId;

	/**
	 * set value for ip_dns_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $ipDnsId
	 */
	public function setIpDnsId($ipDnsId) {
		$this->notifyChanged(self::FIELD_IP_DNS_ID,$this->ipDnsId,$ipDnsId);
		$this->ipDnsId=$ipDnsId;
	}

	/**
	 * get value for ip_dns_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIpDnsId() {
		return $this->ipDnsId;
	}

	/**
	 * set value for unit_dns 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $unitDns
	 */
	public function setUnitDns($unitDns) {
		$this->notifyChanged(self::FIELD_UNIT_DNS,$this->unitDns,$unitDns);
		$this->unitDns=$unitDns;
	}

	/**
	 * get value for unit_dns 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getUnitDns() {
		return $this->unitDns;
	}

	/**
	 * set value for router_dns 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $routerDns
	 */
	public function setRouterDns($routerDns) {
		$this->notifyChanged(self::FIELD_ROUTER_DNS,$this->routerDns,$routerDns);
		$this->routerDns=$routerDns;
	}

	/**
	 * get value for router_dns 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getRouterDns() {
		return $this->routerDns;
	}

	/**
	 * set value for ext_dns 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $extDns
	 */
	public function setExtDns($extDns) {
		$this->notifyChanged(self::FIELD_EXT_DNS,$this->extDns,$extDns);
		$this->extDns=$extDns;
	}

	/**
	 * get value for ext_dns 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getExtDns() {
		return $this->extDns;
	}

	/**
	 * set value for ip_lan 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $ipLan
	 */
	public function setIpLan($ipLan) {
		$this->notifyChanged(self::FIELD_IP_LAN,$this->ipLan,$ipLan);
		$this->ipLan=$ipLan;
	}

	/**
	 * get value for ip_lan 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getIpLan() {
		return $this->ipLan;
	}

	/**
	 * set value for ip_lan_mask 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $ipLanMask
	 */
	public function setIpLanMask($ipLanMask) {
		$this->notifyChanged(self::FIELD_IP_LAN_MASK,$this->ipLanMask,$ipLanMask);
		$this->ipLanMask=$ipLanMask;
	}

	/**
	 * get value for ip_lan_mask 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getIpLanMask() {
		return $this->ipLanMask;
	}

	/**
	 * set value for ip_router 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $ipRouter
	 */
	public function setIpRouter($ipRouter) {
		$this->notifyChanged(self::FIELD_IP_ROUTER,$this->ipRouter,$ipRouter);
		$this->ipRouter=$ipRouter;
	}

	/**
	 * get value for ip_router 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getIpRouter() {
		return $this->ipRouter;
	}

	/**
	 * set value for ip_nat 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $ipNat
	 */
	public function setIpNat($ipNat) {
		$this->notifyChanged(self::FIELD_IP_NAT,$this->ipNat,$ipNat);
		$this->ipNat=$ipNat;
	}

	/**
	 * get value for ip_nat 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getIpNat() {
		return $this->ipNat;
	}

	/**
	 * set value for ip_nat_mask 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $ipNatMask
	 */
	public function setIpNatMask($ipNatMask) {
		$this->notifyChanged(self::FIELD_IP_NAT_MASK,$this->ipNatMask,$ipNatMask);
		$this->ipNatMask=$ipNatMask;
	}

	/**
	 * get value for ip_nat_mask 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getIpNatMask() {
		return $this->ipNatMask;
	}

	/**
	 * set value for username 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $username
	 */
	public function setUsername($username) {
		$this->notifyChanged(self::FIELD_USERNAME,$this->username,$username);
		$this->username=$username;
	}

	/**
	 * get value for username 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * set value for password 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $password
	 */
	public function setPassword($password) {
		$this->notifyChanged(self::FIELD_PASSWORD,$this->password,$password);
		$this->password=$password;
	}

	/**
	 * get value for password 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
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
			self::FIELD_IP_DNS_ID=>$this->getIpDnsId(),
			self::FIELD_UNIT_DNS=>$this->getUnitDns(),
			self::FIELD_ROUTER_DNS=>$this->getRouterDns(),
			self::FIELD_EXT_DNS=>$this->getExtDns(),
			self::FIELD_IP_LAN=>$this->getIpLan(),
			self::FIELD_IP_LAN_MASK=>$this->getIpLanMask(),
			self::FIELD_IP_ROUTER=>$this->getIpRouter(),
			self::FIELD_IP_NAT=>$this->getIpNat(),
			self::FIELD_IP_NAT_MASK=>$this->getIpNatMask(),
			self::FIELD_USERNAME=>$this->getUsername(),
			self::FIELD_PASSWORD=>$this->getPassword(),
			self::FIELD_MM_ID=>$this->getMmId());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_IP_DNS_ID=>$this->getIpDnsId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of UnitIpDns instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param UnitIpDns $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return UnitIpDns[]
	 */
	public static function findByExample(PDO $db,UnitIpDns $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of UnitIpDns instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return UnitIpDns[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `unit_ip_dns`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of UnitIpDns instances
	 *
	 * @param PDOStatement $stmt
	 * @return UnitIpDns[]
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
	 * returns the result as an array of UnitIpDns instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return UnitIpDns[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new UnitIpDns();
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
	 * Execute select query and return matched rows as an array of UnitIpDns instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return UnitIpDns[]
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
		$sql='DELETE FROM `unit_ip_dns`'
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
		$this->setIpDnsId($result['ip_dns_id']);
		$this->setUnitDns($result['unit_dns']);
		$this->setRouterDns($result['router_dns']);
		$this->setExtDns($result['ext_dns']);
		$this->setIpLan($result['ip_lan']);
		$this->setIpLanMask($result['ip_lan_mask']);
		$this->setIpRouter($result['ip_router']);
		$this->setIpNat($result['ip_nat']);
		$this->setIpNatMask($result['ip_nat_mask']);
		$this->setUsername($result['username']);
		$this->setPassword($result['password']);
		$this->setMmId($result['mm_id']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return UnitIpDns
	 */
	public static function findById(PDO $db,$ipDnsId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$ipDnsId);
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
		$o=new UnitIpDns();
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
		$stmt->bindValue(1,$this->getIpDnsId());
		$stmt->bindValue(2,$this->getUnitDns());
		$stmt->bindValue(3,$this->getRouterDns());
		$stmt->bindValue(4,$this->getExtDns());
		$stmt->bindValue(5,$this->getIpLan());
		$stmt->bindValue(6,$this->getIpLanMask());
		$stmt->bindValue(7,$this->getIpRouter());
		$stmt->bindValue(8,$this->getIpNat());
		$stmt->bindValue(9,$this->getIpNatMask());
		$stmt->bindValue(10,$this->getUsername());
		$stmt->bindValue(11,$this->getPassword());
		$stmt->bindValue(12,$this->getMmId());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIpDnsId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getUnitDns());
			$stmt->bindValue(2,$this->getRouterDns());
			$stmt->bindValue(3,$this->getExtDns());
			$stmt->bindValue(4,$this->getIpLan());
			$stmt->bindValue(5,$this->getIpLanMask());
			$stmt->bindValue(6,$this->getIpRouter());
			$stmt->bindValue(7,$this->getIpNat());
			$stmt->bindValue(8,$this->getIpNatMask());
			$stmt->bindValue(9,$this->getUsername());
			$stmt->bindValue(10,$this->getPassword());
			$stmt->bindValue(11,$this->getMmId());
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
			$this->setIpDnsId($lastInsertId);
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
		$stmt->bindValue(13,$this->getIpDnsId());
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
		$stmt->bindValue(1,$this->getIpDnsId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch Connectivity's which this UnitIpDns references.
	 * `unit_ip_dns`.`ip_dns_id` -> `connectivity`.`unit_ip_dns_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Connectivity[]
	 */
	public function fetchConnectivityCollection(PDO $db, $sort=null) {
		$filter=array(Connectivity::FIELD_UNIT_IP_DNS_ID=>$this->getIpDnsId());
		return Connectivity::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch IpMasks which references this UnitIpDns. Will return null in case reference is invalid.
	 * `unit_ip_dns`.`ip_lan_mask` -> `ip_masks`.`ip_mask_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return IpMasks
	 */
	public function fetchIpMasks(PDO $db, $sort=null) {
		$filter=array(IpMasks::FIELD_IP_MASK_ID=>$this->getIpLanMask());
		$result=IpMasks::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch IpMasks1 which references this UnitIpDns. Will return null in case reference is invalid.
	 * `unit_ip_dns`.`ip_nat_mask` -> `ip_masks`.`ip_mask_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return IpMasks1
	 */
	public function fetchIpMasks1(PDO $db, $sort=null) {
		$filter=array(IpMasks1::FIELD_IP_MASK_ID=>$this->getIpNatMask());
		$result=IpMasks1::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Units which references this UnitIpDns. Will return null in case reference is invalid.
	 * `unit_ip_dns`.`mm_id` -> `units`.`mm_id`
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
		return self::hashToDomDocument($this->toHash(), 'UnitIpDns');
	}

	/**
	 * get single UnitIpDns instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return UnitIpDns
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new UnitIpDns();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of UnitIpDns from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return UnitIpDns[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('UnitIpDns') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>