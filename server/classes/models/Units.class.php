<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class Units extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Units';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='units';
	const SQL_INSERT='INSERT INTO `units` (`mm_id`,`registry_no`,`source_id`,`category_id`,`state_id`,`name`,`special_name`,`area_team_number`,`street_address`,`postal_code`,`fax_number`,`phone_number`,`email`,`students_count`,`groups_count`,`levels_count`,`last_update`,`tax_number`,`comments`,`last_sync`,`region_edu_admin_id`,`edu_admin_id`,`transfer_area_id`,`prefecture_id`,`municipality_id`,`education_level_id`,`unit_type_id`,`orientation_type_id`,`operation_shift_id`,`legal_character_id`,`implementation_entity_id`,`tax_office_id`,`special_type_id`,`latitude`,`longitude`,`positioning`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `units` (`registry_no`,`source_id`,`category_id`,`state_id`,`name`,`special_name`,`area_team_number`,`street_address`,`postal_code`,`fax_number`,`phone_number`,`email`,`students_count`,`groups_count`,`levels_count`,`last_update`,`tax_number`,`comments`,`last_sync`,`region_edu_admin_id`,`edu_admin_id`,`transfer_area_id`,`prefecture_id`,`municipality_id`,`education_level_id`,`unit_type_id`,`orientation_type_id`,`operation_shift_id`,`legal_character_id`,`implementation_entity_id`,`tax_office_id`,`special_type_id`,`latitude`,`longitude`,`positioning`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `units` SET `mm_id`=?,`registry_no`=?,`source_id`=?,`category_id`=?,`state_id`=?,`name`=?,`special_name`=?,`area_team_number`=?,`street_address`=?,`postal_code`=?,`fax_number`=?,`phone_number`=?,`email`=?,`students_count`=?,`groups_count`=?,`levels_count`=?,`last_update`=?,`tax_number`=?,`comments`=?,`last_sync`=?,`region_edu_admin_id`=?,`edu_admin_id`=?,`transfer_area_id`=?,`prefecture_id`=?,`municipality_id`=?,`education_level_id`=?,`unit_type_id`=?,`orientation_type_id`=?,`operation_shift_id`=?,`legal_character_id`=?,`implementation_entity_id`=?,`tax_office_id`=?,`special_type_id`=?,`latitude`=?,`longitude`=?,`positioning`=? WHERE `mm_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `units` WHERE `mm_id`=?';
	const SQL_DELETE_PK='DELETE FROM `units` WHERE `mm_id`=?';
	const FIELD_MM_ID=-28527397;
	const FIELD_REGISTRY_NO=103308548;
	const FIELD_SOURCE_ID=-779895808;
	const FIELD_CATEGORY_ID=-532804611;
	const FIELD_STATE_ID=100900648;
	const FIELD_NAME=-1247827542;
	const FIELD_SPECIAL_NAME=-1028383120;
	const FIELD_AREA_TEAM_NUMBER=1538907992;
	const FIELD_STREET_ADDRESS=1885926423;
	const FIELD_POSTAL_CODE=171118818;
	const FIELD_FAX_NUMBER=968171146;
	const FIELD_PHONE_NUMBER=-375987367;
	const FIELD_EMAIL=-35913635;
	const FIELD_STUDENTS_COUNT=-1374684153;
	const FIELD_GROUPS_COUNT=20610819;
	const FIELD_LEVELS_COUNT=1649154654;
	const FIELD_LAST_UPDATE=18550419;
	const FIELD_TAX_NUMBER=-1783017924;
	const FIELD_COMMENTS=-1819712109;
	const FIELD_LAST_SYNC=-1363158299;
	const FIELD_REGION_EDU_ADMIN_ID=-1547604768;
	const FIELD_EDU_ADMIN_ID=-1313534317;
	const FIELD_TRANSFER_AREA_ID=-1106217384;
	const FIELD_PREFECTURE_ID=2968422;
	const FIELD_MUNICIPALITY_ID=-1482521793;
	const FIELD_EDUCATION_LEVEL_ID=-1220433076;
	const FIELD_UNIT_TYPE_ID=1197751460;
	const FIELD_ORIENTATION_TYPE_ID=87587794;
	const FIELD_OPERATION_SHIFT_ID=-1218057553;
	const FIELD_LEGAL_CHARACTER_ID=-150060394;
	const FIELD_IMPLEMENTATION_ENTITY_ID=-425625527;
	const FIELD_TAX_OFFICE_ID=-1630556757;
	const FIELD_SPECIAL_TYPE_ID=1160214075;
	const FIELD_LATITUDE=1637692427;
	const FIELD_LONGITUDE=1055880688;
	const FIELD_POSITIONING=2086953498;
	private static $PRIMARY_KEYS=array(self::FIELD_MM_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_MM_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_MM_ID=>'mm_id',
		self::FIELD_REGISTRY_NO=>'registry_no',
		self::FIELD_SOURCE_ID=>'source_id',
		self::FIELD_CATEGORY_ID=>'category_id',
		self::FIELD_STATE_ID=>'state_id',
		self::FIELD_NAME=>'name',
		self::FIELD_SPECIAL_NAME=>'special_name',
		self::FIELD_AREA_TEAM_NUMBER=>'area_team_number',
		self::FIELD_STREET_ADDRESS=>'street_address',
		self::FIELD_POSTAL_CODE=>'postal_code',
		self::FIELD_FAX_NUMBER=>'fax_number',
		self::FIELD_PHONE_NUMBER=>'phone_number',
		self::FIELD_EMAIL=>'email',
		self::FIELD_STUDENTS_COUNT=>'students_count',
		self::FIELD_GROUPS_COUNT=>'groups_count',
		self::FIELD_LEVELS_COUNT=>'levels_count',
		self::FIELD_LAST_UPDATE=>'last_update',
		self::FIELD_TAX_NUMBER=>'tax_number',
		self::FIELD_COMMENTS=>'comments',
		self::FIELD_LAST_SYNC=>'last_sync',
		self::FIELD_REGION_EDU_ADMIN_ID=>'region_edu_admin_id',
		self::FIELD_EDU_ADMIN_ID=>'edu_admin_id',
		self::FIELD_TRANSFER_AREA_ID=>'transfer_area_id',
		self::FIELD_PREFECTURE_ID=>'prefecture_id',
		self::FIELD_MUNICIPALITY_ID=>'municipality_id',
		self::FIELD_EDUCATION_LEVEL_ID=>'education_level_id',
		self::FIELD_UNIT_TYPE_ID=>'unit_type_id',
		self::FIELD_ORIENTATION_TYPE_ID=>'orientation_type_id',
		self::FIELD_OPERATION_SHIFT_ID=>'operation_shift_id',
		self::FIELD_LEGAL_CHARACTER_ID=>'legal_character_id',
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>'implementation_entity_id',
		self::FIELD_TAX_OFFICE_ID=>'tax_office_id',
		self::FIELD_SPECIAL_TYPE_ID=>'special_type_id',
		self::FIELD_LATITUDE=>'latitude',
		self::FIELD_LONGITUDE=>'longitude',
		self::FIELD_POSITIONING=>'positioning');
	private static $PROPERTY_NAMES=array(
		self::FIELD_MM_ID=>'mmId',
		self::FIELD_REGISTRY_NO=>'registryNo',
		self::FIELD_SOURCE_ID=>'sourceId',
		self::FIELD_CATEGORY_ID=>'categoryId',
		self::FIELD_STATE_ID=>'stateId',
		self::FIELD_NAME=>'name',
		self::FIELD_SPECIAL_NAME=>'specialName',
		self::FIELD_AREA_TEAM_NUMBER=>'areaTeamNumber',
		self::FIELD_STREET_ADDRESS=>'streetAddress',
		self::FIELD_POSTAL_CODE=>'postalCode',
		self::FIELD_FAX_NUMBER=>'faxNumber',
		self::FIELD_PHONE_NUMBER=>'phoneNumber',
		self::FIELD_EMAIL=>'email',
		self::FIELD_STUDENTS_COUNT=>'studentsCount',
		self::FIELD_GROUPS_COUNT=>'groupsCount',
		self::FIELD_LEVELS_COUNT=>'levelsCount',
		self::FIELD_LAST_UPDATE=>'lastUpdate',
		self::FIELD_TAX_NUMBER=>'taxNumber',
		self::FIELD_COMMENTS=>'comments',
		self::FIELD_LAST_SYNC=>'lastSync',
		self::FIELD_REGION_EDU_ADMIN_ID=>'regionEduAdminId',
		self::FIELD_EDU_ADMIN_ID=>'eduAdminId',
		self::FIELD_TRANSFER_AREA_ID=>'transferAreaId',
		self::FIELD_PREFECTURE_ID=>'prefectureId',
		self::FIELD_MUNICIPALITY_ID=>'municipalityId',
		self::FIELD_EDUCATION_LEVEL_ID=>'educationLevelId',
		self::FIELD_UNIT_TYPE_ID=>'unitTypeId',
		self::FIELD_ORIENTATION_TYPE_ID=>'orientationTypeId',
		self::FIELD_OPERATION_SHIFT_ID=>'operationShiftId',
		self::FIELD_LEGAL_CHARACTER_ID=>'legalCharacterId',
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>'implementationEntityId',
		self::FIELD_TAX_OFFICE_ID=>'taxOfficeId',
		self::FIELD_SPECIAL_TYPE_ID=>'specialTypeId',
		self::FIELD_LATITUDE=>'latitude',
		self::FIELD_LONGITUDE=>'longitude',
		self::FIELD_POSITIONING=>'positioning');
	private static $PROPERTY_TYPES=array(
		self::FIELD_MM_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_REGISTRY_NO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SOURCE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_CATEGORY_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_STATE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SPECIAL_NAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_AREA_TEAM_NUMBER=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_STREET_ADDRESS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_POSTAL_CODE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FAX_NUMBER=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PHONE_NUMBER=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_STUDENTS_COUNT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_GROUPS_COUNT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LEVELS_COUNT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LAST_UPDATE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TAX_NUMBER=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_COMMENTS=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LAST_SYNC=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_REGION_EDU_ADMIN_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_EDU_ADMIN_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TRANSFER_AREA_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PREFECTURE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_MUNICIPALITY_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_EDUCATION_LEVEL_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_UNIT_TYPE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ORIENTATION_TYPE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_OPERATION_SHIFT_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LEGAL_CHARACTER_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TAX_OFFICE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SPECIAL_TYPE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LATITUDE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LONGITUDE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_POSITIONING=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_MM_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_REGISTRY_NO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,11,0,true),
		self::FIELD_SOURCE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_CATEGORY_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_STATE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_NAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_SPECIAL_NAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_AREA_TEAM_NUMBER=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_STREET_ADDRESS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_POSTAL_CODE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,true),
		self::FIELD_FAX_NUMBER=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_PHONE_NUMBER=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_STUDENTS_COUNT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_GROUPS_COUNT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_LEVELS_COUNT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_LAST_UPDATE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_TAX_NUMBER=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_COMMENTS=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_LAST_SYNC=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_REGION_EDU_ADMIN_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_EDU_ADMIN_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_TRANSFER_AREA_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_PREFECTURE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_MUNICIPALITY_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_EDUCATION_LEVEL_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_UNIT_TYPE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ORIENTATION_TYPE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_OPERATION_SHIFT_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_LEGAL_CHARACTER_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_TAX_OFFICE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_SPECIAL_TYPE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_LATITUDE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_LONGITUDE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_POSITIONING=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_MM_ID=>null,
		self::FIELD_REGISTRY_NO=>null,
		self::FIELD_SOURCE_ID=>null,
		self::FIELD_CATEGORY_ID=>null,
		self::FIELD_STATE_ID=>null,
		self::FIELD_NAME=>null,
		self::FIELD_SPECIAL_NAME=>null,
		self::FIELD_AREA_TEAM_NUMBER=>null,
		self::FIELD_STREET_ADDRESS=>null,
		self::FIELD_POSTAL_CODE=>null,
		self::FIELD_FAX_NUMBER=>null,
		self::FIELD_PHONE_NUMBER=>null,
		self::FIELD_EMAIL=>null,
		self::FIELD_STUDENTS_COUNT=>null,
		self::FIELD_GROUPS_COUNT=>null,
		self::FIELD_LEVELS_COUNT=>null,
		self::FIELD_LAST_UPDATE=>null,
		self::FIELD_TAX_NUMBER=>null,
		self::FIELD_COMMENTS=>null,
		self::FIELD_LAST_SYNC=>null,
		self::FIELD_REGION_EDU_ADMIN_ID=>null,
		self::FIELD_EDU_ADMIN_ID=>null,
		self::FIELD_TRANSFER_AREA_ID=>null,
		self::FIELD_PREFECTURE_ID=>null,
		self::FIELD_MUNICIPALITY_ID=>null,
		self::FIELD_EDUCATION_LEVEL_ID=>null,
		self::FIELD_UNIT_TYPE_ID=>null,
		self::FIELD_ORIENTATION_TYPE_ID=>null,
		self::FIELD_OPERATION_SHIFT_ID=>null,
		self::FIELD_LEGAL_CHARACTER_ID=>null,
		self::FIELD_IMPLEMENTATION_ENTITY_ID=>null,
		self::FIELD_TAX_OFFICE_ID=>null,
		self::FIELD_SPECIAL_TYPE_ID=>null,
		self::FIELD_LATITUDE=>null,
		self::FIELD_LONGITUDE=>null,
		self::FIELD_POSITIONING=>null);
	private $mmId;
	private $registryNo;
	private $sourceId;
	private $categoryId;
	private $stateId;
	private $name;
	private $specialName;
	private $areaTeamNumber;
	private $streetAddress;
	private $postalCode;
	private $faxNumber;
	private $phoneNumber;
	private $email;
	private $studentsCount;
	private $groupsCount;
	private $levelsCount;
	private $lastUpdate;
	private $taxNumber;
	private $comments;
	private $lastSync;
	private $regionEduAdminId;
	private $eduAdminId;
	private $transferAreaId;
	private $prefectureId;
	private $municipalityId;
	private $educationLevelId;
	private $unitTypeId;
	private $orientationTypeId;
	private $operationShiftId;
	private $legalCharacterId;
	private $implementationEntityId;
	private $taxOfficeId;
	private $specialTypeId;
	private $latitude;
	private $longitude;
	private $positioning;

	/**
	 * set value for mm_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
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
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getMmId() {
		return $this->mmId;
	}

	/**
	 * set value for registry_no 
	 *
	 * type:VARCHAR,size:11,default:null,index,nullable
	 *
	 * @param mixed $registryNo
	 */
	public function setRegistryNo($registryNo) {
		$this->notifyChanged(self::FIELD_REGISTRY_NO,$this->registryNo,$registryNo);
		$this->registryNo=$registryNo;
	}

	/**
	 * get value for registry_no 
	 *
	 * type:VARCHAR,size:11,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getRegistryNo() {
		return $this->registryNo;
	}

	/**
	 * set value for source_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $sourceId
	 */
	public function setSourceId($sourceId) {
		$this->notifyChanged(self::FIELD_SOURCE_ID,$this->sourceId,$sourceId);
		$this->sourceId=$sourceId;
	}

	/**
	 * get value for source_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getSourceId() {
		return $this->sourceId;
	}

	/**
	 * set value for category_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $categoryId
	 */
	public function setCategoryId($categoryId) {
		$this->notifyChanged(self::FIELD_CATEGORY_ID,$this->categoryId,$categoryId);
		$this->categoryId=$categoryId;
	}

	/**
	 * get value for category_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getCategoryId() {
		return $this->categoryId;
	}

	/**
	 * set value for state_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $stateId
	 */
	public function setStateId($stateId) {
		$this->notifyChanged(self::FIELD_STATE_ID,$this->stateId,$stateId);
		$this->stateId=$stateId;
	}

	/**
	 * get value for state_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getStateId() {
		return $this->stateId;
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
	 * set value for special_name 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $specialName
	 */
	public function setSpecialName($specialName) {
		$this->notifyChanged(self::FIELD_SPECIAL_NAME,$this->specialName,$specialName);
		$this->specialName=$specialName;
	}

	/**
	 * get value for special_name 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getSpecialName() {
		return $this->specialName;
	}

	/**
	 * set value for area_team_number 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $areaTeamNumber
	 */
	public function setAreaTeamNumber($areaTeamNumber) {
		$this->notifyChanged(self::FIELD_AREA_TEAM_NUMBER,$this->areaTeamNumber,$areaTeamNumber);
		$this->areaTeamNumber=$areaTeamNumber;
	}

	/**
	 * get value for area_team_number 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getAreaTeamNumber() {
		return $this->areaTeamNumber;
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
	 * type:VARCHAR,size:10,default:null,index,nullable
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
	 * type:VARCHAR,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}

	/**
	 * set value for fax_number 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $faxNumber
	 */
	public function setFaxNumber($faxNumber) {
		$this->notifyChanged(self::FIELD_FAX_NUMBER,$this->faxNumber,$faxNumber);
		$this->faxNumber=$faxNumber;
	}

	/**
	 * get value for fax_number 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
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
	 * set value for students_count 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $studentsCount
	 */
	public function setStudentsCount($studentsCount) {
		$this->notifyChanged(self::FIELD_STUDENTS_COUNT,$this->studentsCount,$studentsCount);
		$this->studentsCount=$studentsCount;
	}

	/**
	 * get value for students_count 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getStudentsCount() {
		return $this->studentsCount;
	}

	/**
	 * set value for groups_count 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $groupsCount
	 */
	public function setGroupsCount($groupsCount) {
		$this->notifyChanged(self::FIELD_GROUPS_COUNT,$this->groupsCount,$groupsCount);
		$this->groupsCount=$groupsCount;
	}

	/**
	 * get value for groups_count 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getGroupsCount() {
		return $this->groupsCount;
	}

	/**
	 * set value for levels_count 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $levelsCount
	 */
	public function setLevelsCount($levelsCount) {
		$this->notifyChanged(self::FIELD_LEVELS_COUNT,$this->levelsCount,$levelsCount);
		$this->levelsCount=$levelsCount;
	}

	/**
	 * get value for levels_count 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getLevelsCount() {
		return $this->levelsCount;
	}

	/**
	 * set value for last_update 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @param mixed $lastUpdate
	 */
	public function setLastUpdate($lastUpdate) {
		$this->notifyChanged(self::FIELD_LAST_UPDATE,$this->lastUpdate,$lastUpdate);
		$this->lastUpdate=$lastUpdate;
	}

	/**
	 * get value for last_update 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getLastUpdate() {
		return $this->lastUpdate;
	}

	/**
	 * set value for tax_number 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $taxNumber
	 */
	public function setTaxNumber($taxNumber) {
		$this->notifyChanged(self::FIELD_TAX_NUMBER,$this->taxNumber,$taxNumber);
		$this->taxNumber=$taxNumber;
	}

	/**
	 * get value for tax_number 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getTaxNumber() {
		return $this->taxNumber;
	}

	/**
	 * set value for comments 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $comments
	 */
	public function setComments($comments) {
		$this->notifyChanged(self::FIELD_COMMENTS,$this->comments,$comments);
		$this->comments=$comments;
	}

	/**
	 * get value for comments 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getComments() {
		return $this->comments;
	}

	/**
	 * set value for last_sync 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @param mixed $lastSync
	 */
	public function setLastSync($lastSync) {
		$this->notifyChanged(self::FIELD_LAST_SYNC,$this->lastSync,$lastSync);
		$this->lastSync=$lastSync;
	}

	/**
	 * get value for last_sync 
	 *
	 * type:DATETIME,size:19,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getLastSync() {
		return $this->lastSync;
	}

	/**
	 * set value for region_edu_admin_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $regionEduAdminId
	 */
	public function setRegionEduAdminId($regionEduAdminId) {
		$this->notifyChanged(self::FIELD_REGION_EDU_ADMIN_ID,$this->regionEduAdminId,$regionEduAdminId);
		$this->regionEduAdminId=$regionEduAdminId;
	}

	/**
	 * get value for region_edu_admin_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getRegionEduAdminId() {
		return $this->regionEduAdminId;
	}

	/**
	 * set value for edu_admin_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $eduAdminId
	 */
	public function setEduAdminId($eduAdminId) {
		$this->notifyChanged(self::FIELD_EDU_ADMIN_ID,$this->eduAdminId,$eduAdminId);
		$this->eduAdminId=$eduAdminId;
	}

	/**
	 * get value for edu_admin_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getEduAdminId() {
		return $this->eduAdminId;
	}

	/**
	 * set value for transfer_area_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $transferAreaId
	 */
	public function setTransferAreaId($transferAreaId) {
		$this->notifyChanged(self::FIELD_TRANSFER_AREA_ID,$this->transferAreaId,$transferAreaId);
		$this->transferAreaId=$transferAreaId;
	}

	/**
	 * get value for transfer_area_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getTransferAreaId() {
		return $this->transferAreaId;
	}

	/**
	 * set value for prefecture_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $prefectureId
	 */
	public function setPrefectureId($prefectureId) {
		$this->notifyChanged(self::FIELD_PREFECTURE_ID,$this->prefectureId,$prefectureId);
		$this->prefectureId=$prefectureId;
	}

	/**
	 * get value for prefecture_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getPrefectureId() {
		return $this->prefectureId;
	}

	/**
	 * set value for municipality_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $municipalityId
	 */
	public function setMunicipalityId($municipalityId) {
		$this->notifyChanged(self::FIELD_MUNICIPALITY_ID,$this->municipalityId,$municipalityId);
		$this->municipalityId=$municipalityId;
	}

	/**
	 * get value for municipality_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getMunicipalityId() {
		return $this->municipalityId;
	}

	/**
	 * set value for education_level_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $educationLevelId
	 */
	public function setEducationLevelId($educationLevelId) {
		$this->notifyChanged(self::FIELD_EDUCATION_LEVEL_ID,$this->educationLevelId,$educationLevelId);
		$this->educationLevelId=$educationLevelId;
	}

	/**
	 * get value for education_level_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getEducationLevelId() {
		return $this->educationLevelId;
	}

	/**
	 * set value for unit_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $unitTypeId
	 */
	public function setUnitTypeId($unitTypeId) {
		$this->notifyChanged(self::FIELD_UNIT_TYPE_ID,$this->unitTypeId,$unitTypeId);
		$this->unitTypeId=$unitTypeId;
	}

	/**
	 * get value for unit_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getUnitTypeId() {
		return $this->unitTypeId;
	}

	/**
	 * set value for orientation_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $orientationTypeId
	 */
	public function setOrientationTypeId($orientationTypeId) {
		$this->notifyChanged(self::FIELD_ORIENTATION_TYPE_ID,$this->orientationTypeId,$orientationTypeId);
		$this->orientationTypeId=$orientationTypeId;
	}

	/**
	 * get value for orientation_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getOrientationTypeId() {
		return $this->orientationTypeId;
	}

	/**
	 * set value for operation_shift_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $operationShiftId
	 */
	public function setOperationShiftId($operationShiftId) {
		$this->notifyChanged(self::FIELD_OPERATION_SHIFT_ID,$this->operationShiftId,$operationShiftId);
		$this->operationShiftId=$operationShiftId;
	}

	/**
	 * get value for operation_shift_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getOperationShiftId() {
		return $this->operationShiftId;
	}

	/**
	 * set value for legal_character_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $legalCharacterId
	 */
	public function setLegalCharacterId($legalCharacterId) {
		$this->notifyChanged(self::FIELD_LEGAL_CHARACTER_ID,$this->legalCharacterId,$legalCharacterId);
		$this->legalCharacterId=$legalCharacterId;
	}

	/**
	 * get value for legal_character_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getLegalCharacterId() {
		return $this->legalCharacterId;
	}

	/**
	 * set value for implementation_entity_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
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
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getImplementationEntityId() {
		return $this->implementationEntityId;
	}

	/**
	 * set value for tax_office_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $taxOfficeId
	 */
	public function setTaxOfficeId($taxOfficeId) {
		$this->notifyChanged(self::FIELD_TAX_OFFICE_ID,$this->taxOfficeId,$taxOfficeId);
		$this->taxOfficeId=$taxOfficeId;
	}

	/**
	 * get value for tax_office_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getTaxOfficeId() {
		return $this->taxOfficeId;
	}

	/**
	 * set value for special_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $specialTypeId
	 */
	public function setSpecialTypeId($specialTypeId) {
		$this->notifyChanged(self::FIELD_SPECIAL_TYPE_ID,$this->specialTypeId,$specialTypeId);
		$this->specialTypeId=$specialTypeId;
	}

	/**
	 * get value for special_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getSpecialTypeId() {
		return $this->specialTypeId;
	}

	/**
	 * set value for latitude 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $latitude
	 */
	public function setLatitude($latitude) {
		$this->notifyChanged(self::FIELD_LATITUDE,$this->latitude,$latitude);
		$this->latitude=$latitude;
	}

	/**
	 * get value for latitude 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * set value for longitude 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $longitude
	 */
	public function setLongitude($longitude) {
		$this->notifyChanged(self::FIELD_LONGITUDE,$this->longitude,$longitude);
		$this->longitude=$longitude;
	}

	/**
	 * get value for longitude 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * set value for positioning 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $positioning
	 */
	public function setPositioning($positioning) {
		$this->notifyChanged(self::FIELD_POSITIONING,$this->positioning,$positioning);
		$this->positioning=$positioning;
	}

	/**
	 * get value for positioning 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getPositioning() {
		return $this->positioning;
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
			self::FIELD_MM_ID=>$this->getMmId(),
			self::FIELD_REGISTRY_NO=>$this->getRegistryNo(),
			self::FIELD_SOURCE_ID=>$this->getSourceId(),
			self::FIELD_CATEGORY_ID=>$this->getCategoryId(),
			self::FIELD_STATE_ID=>$this->getStateId(),
			self::FIELD_NAME=>$this->getName(),
			self::FIELD_SPECIAL_NAME=>$this->getSpecialName(),
			self::FIELD_AREA_TEAM_NUMBER=>$this->getAreaTeamNumber(),
			self::FIELD_STREET_ADDRESS=>$this->getStreetAddress(),
			self::FIELD_POSTAL_CODE=>$this->getPostalCode(),
			self::FIELD_FAX_NUMBER=>$this->getFaxNumber(),
			self::FIELD_PHONE_NUMBER=>$this->getPhoneNumber(),
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_STUDENTS_COUNT=>$this->getStudentsCount(),
			self::FIELD_GROUPS_COUNT=>$this->getGroupsCount(),
			self::FIELD_LEVELS_COUNT=>$this->getLevelsCount(),
			self::FIELD_LAST_UPDATE=>$this->getLastUpdate(),
			self::FIELD_TAX_NUMBER=>$this->getTaxNumber(),
			self::FIELD_COMMENTS=>$this->getComments(),
			self::FIELD_LAST_SYNC=>$this->getLastSync(),
			self::FIELD_REGION_EDU_ADMIN_ID=>$this->getRegionEduAdminId(),
			self::FIELD_EDU_ADMIN_ID=>$this->getEduAdminId(),
			self::FIELD_TRANSFER_AREA_ID=>$this->getTransferAreaId(),
			self::FIELD_PREFECTURE_ID=>$this->getPrefectureId(),
			self::FIELD_MUNICIPALITY_ID=>$this->getMunicipalityId(),
			self::FIELD_EDUCATION_LEVEL_ID=>$this->getEducationLevelId(),
			self::FIELD_UNIT_TYPE_ID=>$this->getUnitTypeId(),
			self::FIELD_ORIENTATION_TYPE_ID=>$this->getOrientationTypeId(),
			self::FIELD_OPERATION_SHIFT_ID=>$this->getOperationShiftId(),
			self::FIELD_LEGAL_CHARACTER_ID=>$this->getLegalCharacterId(),
			self::FIELD_IMPLEMENTATION_ENTITY_ID=>$this->getImplementationEntityId(),
			self::FIELD_TAX_OFFICE_ID=>$this->getTaxOfficeId(),
			self::FIELD_SPECIAL_TYPE_ID=>$this->getSpecialTypeId(),
			self::FIELD_LATITUDE=>$this->getLatitude(),
			self::FIELD_LONGITUDE=>$this->getLongitude(),
			self::FIELD_POSITIONING=>$this->getPositioning());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_MM_ID=>$this->getMmId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of Units instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Units $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Units[]
	 */
	public static function findByExample(PDO $db,Units $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of Units instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Units[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `units`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Units instances
	 *
	 * @param PDOStatement $stmt
	 * @return Units[]
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
	 * returns the result as an array of Units instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Units[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Units();
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
	 * Execute select query and return matched rows as an array of Units instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Units[]
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
		$sql='DELETE FROM `units`'
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
		$this->setMmId($result['mm_id']);
		$this->setRegistryNo($result['registry_no']);
		$this->setSourceId($result['source_id']);
		$this->setCategoryId($result['category_id']);
		$this->setStateId($result['state_id']);
		$this->setName($result['name']);
		$this->setSpecialName($result['special_name']);
		$this->setAreaTeamNumber($result['area_team_number']);
		$this->setStreetAddress($result['street_address']);
		$this->setPostalCode($result['postal_code']);
		$this->setFaxNumber($result['fax_number']);
		$this->setPhoneNumber($result['phone_number']);
		$this->setEmail($result['email']);
		$this->setStudentsCount($result['students_count']);
		$this->setGroupsCount($result['groups_count']);
		$this->setLevelsCount($result['levels_count']);
		$this->setLastUpdate($result['last_update']);
		$this->setTaxNumber($result['tax_number']);
		$this->setComments($result['comments']);
		$this->setLastSync($result['last_sync']);
		$this->setRegionEduAdminId($result['region_edu_admin_id']);
		$this->setEduAdminId($result['edu_admin_id']);
		$this->setTransferAreaId($result['transfer_area_id']);
		$this->setPrefectureId($result['prefecture_id']);
		$this->setMunicipalityId($result['municipality_id']);
		$this->setEducationLevelId($result['education_level_id']);
		$this->setUnitTypeId($result['unit_type_id']);
		$this->setOrientationTypeId($result['orientation_type_id']);
		$this->setOperationShiftId($result['operation_shift_id']);
		$this->setLegalCharacterId($result['legal_character_id']);
		$this->setImplementationEntityId($result['implementation_entity_id']);
		$this->setTaxOfficeId($result['tax_office_id']);
		$this->setSpecialTypeId($result['special_type_id']);
		$this->setLatitude($result['latitude']);
		$this->setLongitude($result['longitude']);
		$this->setPositioning($result['positioning']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Units
	 */
	public static function findById(PDO $db,$mmId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$mmId);
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
		$o=new Units();
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
		$stmt->bindValue(1,$this->getMmId());
		$stmt->bindValue(2,$this->getRegistryNo());
		$stmt->bindValue(4,$this->getSourceId());
		$stmt->bindValue(5,$this->getCategoryId());
		$stmt->bindValue(6,$this->getStateId());
		$stmt->bindValue(7,$this->getName());
		$stmt->bindValue(8,$this->getSpecialName());
		$stmt->bindValue(11,$this->getAreaTeamNumber());
		$stmt->bindValue(12,$this->getStreetAddress());
		$stmt->bindValue(13,$this->getPostalCode());
		$stmt->bindValue(14,$this->getFaxNumber());
		$stmt->bindValue(15,$this->getPhoneNumber());
		$stmt->bindValue(16,$this->getEmail());
		$stmt->bindValue(17,$this->getStudentsCount());
		$stmt->bindValue(18,$this->getGroupsCount());
		$stmt->bindValue(19,$this->getLevelsCount());
		$stmt->bindValue(20,$this->getLastUpdate());
		$stmt->bindValue(21,$this->getTaxNumber());
		$stmt->bindValue(22,$this->getComments());
		$stmt->bindValue(23,$this->getLastSync());
		$stmt->bindValue(24,$this->getRegionEduAdminId());
		$stmt->bindValue(25,$this->getEduAdminId());
		$stmt->bindValue(26,$this->getTransferAreaId());
		$stmt->bindValue(27,$this->getPrefectureId());
		$stmt->bindValue(28,$this->getMunicipalityId());
		$stmt->bindValue(29,$this->getEducationLevelId());
		$stmt->bindValue(30,$this->getUnitTypeId());
		$stmt->bindValue(31,$this->getOrientationTypeId());
		$stmt->bindValue(32,$this->getOperationShiftId());
		$stmt->bindValue(33,$this->getLegalCharacterId());
		$stmt->bindValue(34,$this->getImplementationEntityId());
		$stmt->bindValue(35,$this->getTaxOfficeId());
		$stmt->bindValue(36,$this->getSpecialTypeId());
		$stmt->bindValue(37,$this->getLatitude());
		$stmt->bindValue(38,$this->getLongitude());
		$stmt->bindValue(39,$this->getPositioning());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getMmId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getRegistryNo());
			$stmt->bindValue(3,$this->getSourceId());
			$stmt->bindValue(4,$this->getCategoryId());
			$stmt->bindValue(5,$this->getStateId());
			$stmt->bindValue(6,$this->getName());
			$stmt->bindValue(7,$this->getSpecialName());
			$stmt->bindValue(10,$this->getAreaTeamNumber());
			$stmt->bindValue(11,$this->getStreetAddress());
			$stmt->bindValue(12,$this->getPostalCode());
			$stmt->bindValue(13,$this->getFaxNumber());
			$stmt->bindValue(14,$this->getPhoneNumber());
			$stmt->bindValue(15,$this->getEmail());
			$stmt->bindValue(16,$this->getStudentsCount());
			$stmt->bindValue(17,$this->getGroupsCount());
			$stmt->bindValue(18,$this->getLevelsCount());
			$stmt->bindValue(19,$this->getLastUpdate());
			$stmt->bindValue(20,$this->getTaxNumber());
			$stmt->bindValue(21,$this->getComments());
			$stmt->bindValue(22,$this->getLastSync());
			$stmt->bindValue(23,$this->getRegionEduAdminId());
			$stmt->bindValue(24,$this->getEduAdminId());
			$stmt->bindValue(25,$this->getTransferAreaId());
			$stmt->bindValue(26,$this->getPrefectureId());
			$stmt->bindValue(27,$this->getMunicipalityId());
			$stmt->bindValue(28,$this->getEducationLevelId());
			$stmt->bindValue(29,$this->getUnitTypeId());
			$stmt->bindValue(30,$this->getOrientationTypeId());
			$stmt->bindValue(31,$this->getOperationShiftId());
			$stmt->bindValue(32,$this->getLegalCharacterId());
			$stmt->bindValue(33,$this->getImplementationEntityId());
			$stmt->bindValue(34,$this->getTaxOfficeId());
			$stmt->bindValue(35,$this->getSpecialTypeId());
			$stmt->bindValue(36,$this->getLatitude());
			$stmt->bindValue(37,$this->getLongitude());
			$stmt->bindValue(38,$this->getPositioning());
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
			$this->setMmId($lastInsertId);
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
		$stmt->bindValue(40,$this->getMmId());
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
		$stmt->bindValue(1,$this->getMmId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch Circuits's which this Units references.
	 * `units`.`mm_id` -> `circuits`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Circuits[]
	 */
	public function fetchCircuitsCollection(PDO $db, $sort=null) {
		$filter=array(Circuits::FIELD_MM_ID=>$this->getMmId());
		return Circuits::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Connectivity's which this Units references.
	 * `units`.`mm_id` -> `connectivity`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Connectivity[]
	 */
	public function fetchConnectivityCollection(PDO $db, $sort=null) {
		$filter=array(Connectivity::FIELD_MM_ID=>$this->getMmId());
		return Connectivity::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Cpes's which this Units references.
	 * `units`.`mm_id` -> `cpes`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Cpes[]
	 */
	public function fetchCpesCollection(PDO $db, $sort=null) {
		$filter=array(Cpes::FIELD_MM_ID=>$this->getMmId());
		return Cpes::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Groups's which this Units references.
	 * `units`.`mm_id` -> `groups`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Groups[]
	 */
	public function fetchGroupsCollection(PDO $db, $sort=null) {
		$filter=array(Groups::FIELD_MM_ID=>$this->getMmId());
		return Groups::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Ldaps's which this Units references.
	 * `units`.`mm_id` -> `ldaps`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Ldaps[]
	 */
	public function fetchLdapsCollection(PDO $db, $sort=null) {
		$filter=array(Ldaps::FIELD_MM_ID=>$this->getMmId());
		return Ldaps::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Levels's which this Units references.
	 * `units`.`mm_id` -> `levels`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Levels[]
	 */
	public function fetchLevelsCollection(PDO $db, $sort=null) {
		$filter=array(Levels::FIELD_MM_ID=>$this->getMmId());
		return Levels::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Relations's which this Units references.
	 * `units`.`mm_id` -> `relations`.`guest_mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Relations[]
	 */
	public function fetchRelationsCollection(PDO $db, $sort=null) {
		$filter=array(Relations::FIELD_GUEST_MM_ID=>$this->getMmId());
		return Relations::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Relations1's which this Units references.
	 * `units`.`mm_id` -> `relations`.`host_mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Relations1[]
	 */
	public function fetchRelations1Collection(PDO $db, $sort=null) {
		$filter=array(Relations1::FIELD_HOST_MM_ID=>$this->getMmId());
		return Relations1::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Transitions's which this Units references.
	 * `units`.`mm_id` -> `transitions`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Transitions[]
	 */
	public function fetchTransitionsCollection(PDO $db, $sort=null) {
		$filter=array(Transitions::FIELD_MM_ID=>$this->getMmId());
		return Transitions::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch UnitIpDns's which this Units references.
	 * `units`.`mm_id` -> `unit_ip_dns`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UnitIpDns[]
	 */
	public function fetchUnitIpDnsCollection(PDO $db, $sort=null) {
		$filter=array(UnitIpDns::FIELD_MM_ID=>$this->getMmId());
		return UnitIpDns::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch UnitWorkers's which this Units references.
	 * `units`.`mm_id` -> `unit_workers`.`mm_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UnitWorkers[]
	 */
	public function fetchUnitWorkersCollection(PDO $db, $sort=null) {
		$filter=array(UnitWorkers::FIELD_MM_ID=>$this->getMmId());
		return UnitWorkers::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Categories which references this Units. Will return null in case reference is invalid.
	 * `units`.`category_id` -> `categories`.`category_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Categories
	 */
	public function fetchCategories(PDO $db, $sort=null) {
		$filter=array(Categories::FIELD_CATEGORY_ID=>$this->getCategoryId());
		$result=Categories::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch EducationLevels which references this Units. Will return null in case reference is invalid.
	 * `units`.`education_level_id` -> `education_levels`.`education_level_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return EducationLevels
	 */
	public function fetchEducationLevels(PDO $db, $sort=null) {
		$filter=array(EducationLevels::FIELD_EDUCATION_LEVEL_ID=>$this->getEducationLevelId());
		$result=EducationLevels::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch EduAdmins which references this Units. Will return null in case reference is invalid.
	 * `units`.`edu_admin_id` -> `edu_admins`.`edu_admin_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return EduAdmins
	 */
	public function fetchEduAdmins(PDO $db, $sort=null) {
		$filter=array(EduAdmins::FIELD_EDU_ADMIN_ID=>$this->getEduAdminId());
		$result=EduAdmins::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch ImplementationEntities which references this Units. Will return null in case reference is invalid.
	 * `units`.`implementation_entity_id` -> `implementation_entities`.`implementation_entity_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ImplementationEntities
	 */
	public function fetchImplementationEntities(PDO $db, $sort=null) {
		$filter=array(ImplementationEntities::FIELD_IMPLEMENTATION_ENTITY_ID=>$this->getImplementationEntityId());
		$result=ImplementationEntities::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch LegalCharacters which references this Units. Will return null in case reference is invalid.
	 * `units`.`legal_character_id` -> `legal_characters`.`legal_character_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return LegalCharacters
	 */
	public function fetchLegalCharacters(PDO $db, $sort=null) {
		$filter=array(LegalCharacters::FIELD_LEGAL_CHARACTER_ID=>$this->getLegalCharacterId());
		$result=LegalCharacters::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Municipalities which references this Units. Will return null in case reference is invalid.
	 * `units`.`municipality_id` -> `municipalities`.`municipality_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Municipalities
	 */
	public function fetchMunicipalities(PDO $db, $sort=null) {
		$filter=array(Municipalities::FIELD_MUNICIPALITY_ID=>$this->getMunicipalityId());
		$result=Municipalities::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch OperationShifts which references this Units. Will return null in case reference is invalid.
	 * `units`.`operation_shift_id` -> `operation_shifts`.`operation_shift_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OperationShifts
	 */
	public function fetchOperationShifts(PDO $db, $sort=null) {
		$filter=array(OperationShifts::FIELD_OPERATION_SHIFT_ID=>$this->getOperationShiftId());
		$result=OperationShifts::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch OrientationTypes which references this Units. Will return null in case reference is invalid.
	 * `units`.`orientation_type_id` -> `orientation_types`.`orientation_type_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OrientationTypes
	 */
	public function fetchOrientationTypes(PDO $db, $sort=null) {
		$filter=array(OrientationTypes::FIELD_ORIENTATION_TYPE_ID=>$this->getOrientationTypeId());
		$result=OrientationTypes::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Prefectures which references this Units. Will return null in case reference is invalid.
	 * `units`.`prefecture_id` -> `prefectures`.`prefecture_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Prefectures
	 */
	public function fetchPrefectures(PDO $db, $sort=null) {
		$filter=array(Prefectures::FIELD_PREFECTURE_ID=>$this->getPrefectureId());
		$result=Prefectures::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch RegionEduAdmins which references this Units. Will return null in case reference is invalid.
	 * `units`.`region_edu_admin_id` -> `region_edu_admins`.`region_edu_admin_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return RegionEduAdmins
	 */
	public function fetchRegionEduAdmins(PDO $db, $sort=null) {
		$filter=array(RegionEduAdmins::FIELD_REGION_EDU_ADMIN_ID=>$this->getRegionEduAdminId());
		$result=RegionEduAdmins::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Sources which references this Units. Will return null in case reference is invalid.
	 * `units`.`source_id` -> `sources`.`source_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Sources
	 */
	public function fetchSources(PDO $db, $sort=null) {
		$filter=array(Sources::FIELD_SOURCE_ID=>$this->getSourceId());
		$result=Sources::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch SpecialTypes which references this Units. Will return null in case reference is invalid.
	 * `units`.`special_type_id` -> `special_types`.`special_type_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return SpecialTypes
	 */
	public function fetchSpecialTypes(PDO $db, $sort=null) {
		$filter=array(SpecialTypes::FIELD_SPECIAL_TYPE_ID=>$this->getSpecialTypeId());
		$result=SpecialTypes::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch States which references this Units. Will return null in case reference is invalid.
	 * `units`.`state_id` -> `states`.`state_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return States
	 */
	public function fetchStates(PDO $db, $sort=null) {
		$filter=array(States::FIELD_STATE_ID=>$this->getStateId());
		$result=States::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch TaxOffices which references this Units. Will return null in case reference is invalid.
	 * `units`.`tax_office_id` -> `tax_offices`.`tax_office_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return TaxOffices
	 */
	public function fetchTaxOffices(PDO $db, $sort=null) {
		$filter=array(TaxOffices::FIELD_TAX_OFFICE_ID=>$this->getTaxOfficeId());
		$result=TaxOffices::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch TransferAreas which references this Units. Will return null in case reference is invalid.
	 * `units`.`transfer_area_id` -> `transfer_areas`.`transfer_area_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return TransferAreas
	 */
	public function fetchTransferAreas(PDO $db, $sort=null) {
		$filter=array(TransferAreas::FIELD_TRANSFER_AREA_ID=>$this->getTransferAreaId());
		$result=TransferAreas::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch UnitTypes which references this Units. Will return null in case reference is invalid.
	 * `units`.`unit_type_id` -> `unit_types`.`unit_type_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UnitTypes
	 */
	public function fetchUnitTypes(PDO $db, $sort=null) {
		$filter=array(UnitTypes::FIELD_UNIT_TYPE_ID=>$this->getUnitTypeId());
		$result=UnitTypes::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Units');
	}

	/**
	 * get single Units instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Units
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Units();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Units from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Units[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Units') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>