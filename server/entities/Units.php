<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Units
 *
 * @ORM\Table(name="units", indexes={@ORM\Index(name="registry_no_idx", columns={"registry_no"}), @ORM\Index(name="region_edu_admins_idx", columns={"region_edu_admin_id"}), @ORM\Index(name="prefectures_idx", columns={"prefecture_id"}), @ORM\Index(name="edu_admins_idx", columns={"edu_admin_id"}), @ORM\Index(name="transfer_areas_idx", columns={"transfer_area_id"}), @ORM\Index(name="municipalities_idx", columns={"municipality_id"}), @ORM\Index(name="education_levels_idx", columns={"education_level_id"}), @ORM\Index(name="sources_idx", columns={"source_id"}), @ORM\Index(name="categories_idx", columns={"category_id"}), @ORM\Index(name="states_idx", columns={"state_id"}), @ORM\Index(name="unit_types_idx", columns={"unit_type_id"}), @ORM\Index(name="orientation_types_idx", columns={"orientation_type_id"}), @ORM\Index(name="operation_shifts_idx", columns={"operation_shift_id"}), @ORM\Index(name="legal_characters_idx", columns={"legal_character_id"}), @ORM\Index(name="implementation_entities_idx", columns={"implementation_entity_id"}), @ORM\Index(name="tax_offices_idx", columns={"tax_office_id"}), @ORM\Index(name="special_types_idx", columns={"special_type_id"}), @ORM\Index(name="gluc_idx", columns={"gluc"}), @ORM\Index(name="name_idx", columns={"name"}), @ORM\Index(name="special_name_idx", columns={"special_name"}), @ORM\Index(name="active_idx", columns={"active"}), @ORM\Index(name="suspended_idx", columns={"suspended"}), @ORM\Index(name="area_team_number_idx", columns={"area_team_number"}), @ORM\Index(name="street_address_idx", columns={"street_address"}), @ORM\Index(name="postal_code_idx", columns={"postal_code"}), @ORM\Index(name="fax_number_idx", columns={"fax_number"}), @ORM\Index(name="phone_number_idx", columns={"phone_number"}), @ORM\Index(name="email_idx", columns={"email"}), @ORM\Index(name="stoudents_count_idx", columns={"students_count"}), @ORM\Index(name="groups_count_idx", columns={"groups_count"}), @ORM\Index(name="levels_count_idx", columns={"levels_count"}), @ORM\Index(name="last_update_idx", columns={"last_update"}), @ORM\Index(name="tax_number_idx", columns={"tax_number"}), @ORM\Index(name="comments_idx", columns={"comments"}), @ORM\Index(name="last_sync_idx", columns={"last_sync"}), @ORM\Index(name="latitude_idx", columns={"latitude"}), @ORM\Index(name="longitude_idx", columns={"longitude"}), @ORM\Index(name="positioning_idx", columns={"positioning"})})
 * @ORM\Entity
 */
class Units
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mmId;

    /**
     * @var string
     *
     * @ORM\Column(name="registry_no", type="string", length=11, nullable=true)
     */
    private $registryNo;

    /**
     * @var string
     *
     * @ORM\Column(name="gluc", type="string", length=255, nullable=true)
     */
    private $gluc;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="special_name", type="string", length=255, nullable=true)
     */
    private $specialName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var boolean
     *
     * @ORM\Column(name="suspended", type="boolean", nullable=true)
     */
    private $suspended;

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
     */
    private $streetAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=10, nullable=true)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="fax_number", type="string", length=255, nullable=true)
     */
    private $faxNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=255, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
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
     */
    private $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_number", type="string", length=255, nullable=true)
     */
    private $taxNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=true)
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
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="positioning", type="string", length=255, nullable=true)
     */
    private $positioning;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

    /**
     * @var \EducationLevels
     *
     * @ORM\ManyToOne(targetEntity="EducationLevels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="education_level_id", referencedColumnName="education_level_id")
     * })
     */
    private $educationLevel;

    /**
     * @var \EduAdmins
     *
     * @ORM\ManyToOne(targetEntity="EduAdmins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edu_admin_id", referencedColumnName="edu_admin_id")
     * })
     */
    private $eduAdmin;

    /**
     * @var \ImplementationEntities
     *
     * @ORM\ManyToOne(targetEntity="ImplementationEntities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="implementation_entity_id", referencedColumnName="implementation_entity_id")
     * })
     */
    private $implementationEntity;

    /**
     * @var \LegalCharacters
     *
     * @ORM\ManyToOne(targetEntity="LegalCharacters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="legal_character_id", referencedColumnName="legal_character_id")
     * })
     */
    private $legalCharacter;

    /**
     * @var \Municipalities
     *
     * @ORM\ManyToOne(targetEntity="Municipalities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="municipality_id", referencedColumnName="municipality_id")
     * })
     */
    private $municipality;

    /**
     * @var \OperationShifts
     *
     * @ORM\ManyToOne(targetEntity="OperationShifts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operation_shift_id", referencedColumnName="operation_shift_id")
     * })
     */
    private $operationShift;

    /**
     * @var \OrientationTypes
     *
     * @ORM\ManyToOne(targetEntity="OrientationTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orientation_type_id", referencedColumnName="orientation_type_id")
     * })
     */
    private $orientationType;

    /**
     * @var \Prefectures
     *
     * @ORM\ManyToOne(targetEntity="Prefectures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prefecture_id", referencedColumnName="prefecture_id")
     * })
     */
    private $prefecture;

    /**
     * @var \RegionEduAdmins
     *
     * @ORM\ManyToOne(targetEntity="RegionEduAdmins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_edu_admin_id", referencedColumnName="region_edu_admin_id")
     * })
     */
    private $regionEduAdmin;

    /**
     * @var \Sources
     *
     * @ORM\ManyToOne(targetEntity="Sources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="source_id", referencedColumnName="source_id")
     * })
     */
    private $source;

    /**
     * @var \SpecialTypes
     *
     * @ORM\ManyToOne(targetEntity="SpecialTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_type_id", referencedColumnName="special_type_id")
     * })
     */
    private $specialType;

    /**
     * @var \States
     *
     * @ORM\ManyToOne(targetEntity="States")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="state_id")
     * })
     */
    private $state;

    /**
     * @var \TaxOffices
     *
     * @ORM\ManyToOne(targetEntity="TaxOffices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_office_id", referencedColumnName="tax_office_id")
     * })
     */
    private $taxOffice;

    /**
     * @var \TransferAreas
     *
     * @ORM\ManyToOne(targetEntity="TransferAreas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transfer_area_id", referencedColumnName="transfer_area_id")
     * })
     */
    private $transferArea;

    /**
     * @var \UnitTypes
     *
     * @ORM\ManyToOne(targetEntity="UnitTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_type_id", referencedColumnName="unit_type_id")
     * })
     */
    private $unitType;


}
