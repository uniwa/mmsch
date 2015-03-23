<?php



use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Units
 *
 * @ORM\Table(name="units", indexes={@ORM\Index(name="registry_no_idx", columns={"registry_no"}), @ORM\Index(name="region_edu_admins_idx", columns={"region_edu_admin_id"}), @ORM\Index(name="prefectures_idx", columns={"prefecture_id"}), @ORM\Index(name="edu_admins_idx", columns={"edu_admin_id"}), @ORM\Index(name="transfer_areas_idx", columns={"transfer_area_id"}), @ORM\Index(name="municipalities_idx", columns={"municipality_id"}), @ORM\Index(name="education_levels_idx", columns={"education_level_id"}), @ORM\Index(name="sources_idx", columns={"source_id"}), @ORM\Index(name="categories_idx", columns={"category_id"}), @ORM\Index(name="states_idx", columns={"state_id"}), @ORM\Index(name="unit_types_idx", columns={"unit_type_id"}), @ORM\Index(name="orientation_types_idx", columns={"orientation_type_id"}), @ORM\Index(name="operation_shifts_idx", columns={"operation_shift_id"}), @ORM\Index(name="legal_characters_idx", columns={"legal_character_id"}), @ORM\Index(name="implementation_entities_idx", columns={"implementation_entity_id"}), @ORM\Index(name="tax_offices_idx", columns={"tax_office_id"}), @ORM\Index(name="special_types_idx", columns={"special_type_id"}), @ORM\Index(name="name_idx", columns={"name"}), @ORM\Index(name="special_name_idx", columns={"special_name"}), @ORM\Index(name="active_idx", columns={"active"}), @ORM\Index(name="suspended_idx", columns={"suspended"}), @ORM\Index(name="area_team_number_idx", columns={"area_team_number"}), @ORM\Index(name="street_address_idx", columns={"street_address"}), @ORM\Index(name="postal_code_idx", columns={"postal_code"}), @ORM\Index(name="fax_number_idx", columns={"fax_number"}), @ORM\Index(name="phone_number_idx", columns={"phone_number"}), @ORM\Index(name="email_idx", columns={"email"}), @ORM\Index(name="stoudents_count_idx", columns={"students_count"}), @ORM\Index(name="groups_count_idx", columns={"groups_count"}), @ORM\Index(name="levels_count_idx", columns={"levels_count"}), @ORM\Index(name="last_update_idx", columns={"last_update"}), @ORM\Index(name="tax_number_idx", columns={"tax_number"}), @ORM\Index(name="comments_idx", columns={"comments"}), @ORM\Index(name="last_sync_idx", columns={"last_sync"}), @ORM\Index(name="latitude_idx", columns={"latitude"}), @ORM\Index(name="longitude_idx", columns={"longitude"}), @ORM\Index(name="positioning_idx", columns={"positioning"})})
 * @ORM\Entity
 * @Gedmo\Loggable
 */
class Units
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mm_id", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mmId;

    /**
     * @var string
     *
     * @ORM\Column(name="registry_no", type="string", length=11, nullable=true, unique=true)
     * @Gedmo\Versioned
     */
    private $registryNo;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, unique=true)
     * @Gedmo\Versioned
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="special_name", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $specialName;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_team_number", type="integer", nullable=true)
     */
    private $areaTeamNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="street_address", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $streetAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=10, nullable=true)
     * @Gedmo\Versioned
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="fax_number", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $faxNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="students_count", type="integer", nullable=true)
     */
    private $studentsCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_count", type="integer", nullable=true)
     */
    private $groupsCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="levels_count", type="integer", nullable=true)
     */
    private $levelsCount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=true)
     * @Gedmo\Versioned
     */
    private $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_number", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $taxNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $comments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_sync", type="datetime", nullable=true)
     */
    private $lastSync;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="positioning", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $positioning;

    /**
     * @var string
     *
     * @ORM\Column(name="creation_fek", type="string", length=255, nullable=true)
     * @Gedmo\Versioned
     */
    private $creationFek;
    
    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     * @Gedmo\Versioned
     */
    private $category;

    /**
     * @var \EducationLevels
     *
     * @ORM\ManyToOne(targetEntity="EducationLevels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="education_level_id", referencedColumnName="education_level_id")
     * })
     * @Gedmo\Versioned
     */
    private $educationLevel;

    /**
     * @var \EduAdmins
     *
     * @ORM\ManyToOne(targetEntity="EduAdmins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edu_admin_id", referencedColumnName="edu_admin_id")
     * })
     * @Gedmo\Versioned
     */
    private $eduAdmin;

    /**
     * @var \ImplementationEntities
     *
     * @ORM\ManyToOne(targetEntity="ImplementationEntities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="implementation_entity_id", referencedColumnName="implementation_entity_id")
     * })
     * @Gedmo\Versioned
     */
    private $implementationEntity;

    /**
     * @var \LegalCharacters
     *
     * @ORM\ManyToOne(targetEntity="LegalCharacters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="legal_character_id", referencedColumnName="legal_character_id")
     * })
     * @Gedmo\Versioned
     */
    private $legalCharacter;

    /**
     * @var \Municipalities
     *
     * @ORM\ManyToOne(targetEntity="Municipalities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="municipality_id", referencedColumnName="municipality_id")
     * })
     * @Gedmo\Versioned
     */
    private $municipality;
    
    /**
     * @var \MunicipalityCommunities
     *
     * @ORM\ManyToOne(targetEntity="MunicipalityCommunities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="municipality_community_id", referencedColumnName="municipality_community_id")
     * })
     * @Gedmo\Versioned
     */
    private $municipalityCommunity;

    /**
     * @var \OperationShifts
     *
     * @ORM\ManyToOne(targetEntity="OperationShifts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operation_shift_id", referencedColumnName="operation_shift_id")
     * })
     * @Gedmo\Versioned
     */
    private $operationShift;

    /**
     * @var \OrientationTypes
     *
     * @ORM\ManyToOne(targetEntity="OrientationTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orientation_type_id", referencedColumnName="orientation_type_id")
     * })
     * @Gedmo\Versioned
     */
    private $orientationType;

    /**
     * @var \Prefectures
     *
     * @ORM\ManyToOne(targetEntity="Prefectures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prefecture_id", referencedColumnName="prefecture_id")
     * })
     * @Gedmo\Versioned
     */
    private $prefecture;

    /**
     * @var \RegionEduAdmins
     *
     * @ORM\ManyToOne(targetEntity="RegionEduAdmins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_edu_admin_id", referencedColumnName="region_edu_admin_id")
     * })
     * @Gedmo\Versioned
     */
    private $regionEduAdmin;

    /**
     * @var \Sources
     *
     * @ORM\ManyToOne(targetEntity="Sources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="source_id", referencedColumnName="source_id")
     * })
     * @Gedmo\Versioned
     */
    private $source;

    /**
     * @var \SpecialTypes
     *
     * @ORM\ManyToOne(targetEntity="SpecialTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_type_id", referencedColumnName="special_type_id")
     * })
     * @Gedmo\Versioned
     */
    private $specialType;

    /**
     * @var \States
     *
     * @ORM\ManyToOne(targetEntity="States")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="state_id")
     * })
     * @Gedmo\Versioned
     */
    private $state;

    /**
     * @var \TaxOffices
     *
     * @ORM\ManyToOne(targetEntity="TaxOffices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_office_id", referencedColumnName="tax_office_id")
     * })
     * @Gedmo\Versioned
     */
    private $taxOffice;

    /**
     * @var \TransferAreas
     *
     * @ORM\ManyToOne(targetEntity="TransferAreas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transfer_area_id", referencedColumnName="transfer_area_id")
     * })
     * @Gedmo\Versioned
     */
    private $transferArea;

    /**
     * @var \UnitTypes
     *
     * @ORM\ManyToOne(targetEntity="UnitTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_type_id", referencedColumnName="unit_type_id")
     * })
     * @Gedmo\Versioned
     */
    private $unitType;

    public function getMmId() {
        return $this->mmId;
    }

    public function setMmId($mmId) {
        $this->mmId = $mmId;
    }

    public function getRegistryNo() {
        return $this->registryNo;
    }

    public function setRegistryNo($registryNo) {
        $this->registryNo = $registryNo;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSpecialName() {
        return $this->specialName;
    }

    public function setSpecialName($specialName) {
        $this->specialName = $specialName;
    }

    public function getAreaTeamNumber() {
        return $this->areaTeamNumber;
    }

    public function setAreaTeamNumber($areaTeamNumber) {
        $this->areaTeamNumber = $areaTeamNumber;
    }

    public function getStreetAddress() {
        return $this->streetAddress;
    }

    public function setStreetAddress($streetAddress) {
        $this->streetAddress = $streetAddress;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
    }

    public function getFaxNumber() {
        return $this->faxNumber;
    }

    public function setFaxNumber($faxNumber) {
        $this->faxNumber = $faxNumber;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getStudentsCount() {
        return $this->studentsCount;
    }

    public function setStudentsCount($studentsCount) {
        $this->studentsCount = $studentsCount;
    }

    public function getGroupsCount() {
        return $this->groupsCount;
    }

    public function setGroupsCount($groupsCount) {
        $this->groupsCount = $groupsCount;
    }

    public function getLevelsCount() {
        return $this->levelsCount;
    }

    public function setLevelsCount($levelsCount) {
        $this->levelsCount = $levelsCount;
    }

    public function getLastUpdate() {
        return $this->lastUpdate;
    }

    public function setLastUpdate($lastUpdate) {
        if(is_string($lastUpdate) && $lastUpdate != '') {
            $this->lastUpdate = \DateTime::createFromFormat('Y-m-d H:i:s', $lastUpdate);
        } else if($lastUpdate instanceof \DateTime) {
            $this->lastUpdate = $lastUpdate;
        }
    }

    public function getTaxNumber() {
        return $this->taxNumber;
    }

    public function setTaxNumber($taxNumber) {
        $this->taxNumber = $taxNumber;
    }

    public function getComments() {
        return $this->comments;
    }

    public function setComments($comments) {
        $this->comments = $comments;
    }

    public function getLastSync() {
        return $this->lastSync;
    }

    public function setLastSync($lastSync) {
        if(is_string($lastSync) && $lastSync != '') {
            $this->lastSync = \DateTime::createFromFormat('Y-m-d H:i:s', $lastSync);
        } else if($lastSync instanceof \DateTime) {
            $this->lastSync = $lastSync;
        }
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    public function getPositioning() {
        return $this->positioning;
    }

    public function setPositioning($positioning) {
        $this->positioning = $positioning;
    }

    public function getCreationFek() {
        return $this->creationFek;
    }

    public function setCreationFek($creationFek) {
        $this->creationFek = $creationFek;
    }
    
    public function getCategory() {
        return $this->category;
    }

    public function setCategory(\Categories $category) {
        $this->category = $category;
    }

    public function getEducationLevel() {
        return $this->educationLevel;
    }

    public function setEducationLevel(\EducationLevels $educationLevel) {
        $this->educationLevel = $educationLevel;
    }

    public function getEduAdmin() {
        return $this->eduAdmin;
    }

    public function setEduAdmin(\EduAdmins $eduAdmin) {
        $this->eduAdmin = $eduAdmin;
    }

    public function getImplementationEntity() {
        return $this->implementationEntity;
    }

    public function setImplementationEntity(\ImplementationEntities $implementationEntity) {
        $this->implementationEntity = $implementationEntity;
    }

    public function getLegalCharacter() {
        return $this->legalCharacter;
    }

    public function setLegalCharacter(\LegalCharacters $legalCharacter) {
        $this->legalCharacter = $legalCharacter;
    }

    public function getMunicipality() {
        return $this->municipality;
    }

    public function setMunicipality(\Municipalities $municipality) {
        $this->municipality = $municipality;
    }

    public function getMunicipalityCommunity() {
        return $this->municipalityCommunity;
    }

    public function setMunicipalityCommunity(\MunicipalityCommunities $municipalityCommunity) {
        $this->municipalityCommunity = $municipalityCommunity;
    }
    
    public function getOperationShift() {
        return $this->operationShift;
    }

    public function setOperationShift(\OperationShifts $operationShift) {
        $this->operationShift = $operationShift;
    }

    public function getOrientationType() {
        return $this->orientationType;
    }

    public function setOrientationType(\OrientationTypes $orientationType) {
        $this->orientationType = $orientationType;
    }

    public function getPrefecture() {
        return $this->prefecture;
    }

    public function setPrefecture(\Prefectures $prefecture) {
        $this->prefecture = $prefecture;
    }

    public function getRegionEduAdmin() {
        return $this->regionEduAdmin;
    }

    public function setRegionEduAdmin(\RegionEduAdmins $regionEduAdmin) {
        $this->regionEduAdmin = $regionEduAdmin;
    }

    public function getSource() {
        return $this->source;
    }

    public function setSource(\Sources $source) {
        $this->source = $source;
    }

    public function getSpecialType() {
        return $this->specialType;
    }

    public function setSpecialType(\SpecialTypes $specialType) {
        $this->specialType = $specialType;
    }

    public function getState() {
        return $this->state;
    }

    public function setState(\States $state) {
        $this->state = $state;
    }

    public function getTaxOffice() {
        return $this->taxOffice;
    }

    public function setTaxOffice(\TaxOffices $taxOffice) {
        $this->taxOffice = $taxOffice;
    }

    public function getTransferArea() {
        return $this->transferArea;
    }

    public function setTransferArea(\TransferAreas $transferArea) {
        $this->transferArea = $transferArea;
    }

    public function getUnitType() {
        return $this->unitType;
    }

    public function setUnitType(\UnitTypes $unitType) {
        $this->unitType = $unitType;
    }
}
