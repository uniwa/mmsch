<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SchoolCommittees
 *
 * @ORM\Table(name="school_committees", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="region_edu_admins_idx", columns={"region_edu_admin_id"}), @ORM\Index(name="prefectures_idx", columns={"prefecture_id"}), @ORM\Index(name="edu_admins_idx", columns={"edu_admin_id"}), @ORM\Index(name="municipalities_idx", columns={"municipality_id"}), @ORM\Index(name="education_levels_idx", columns={"education_level_id"}), @ORM\Index(name="tax_offices_idx", columns={"tax_office_id"}), @ORM\Index(name="active_idx", columns={"active"}), @ORM\Index(name="street_address_idx", columns={"street_address"}), @ORM\Index(name="postal_code_idx", columns={"postal_code"}), @ORM\Index(name="fax_number_idx", columns={"fax_number"}), @ORM\Index(name="phone_number_idx", columns={"phone_number"}), @ORM\Index(name="email_idx", columns={"email"}), @ORM\Index(name="last_update_idx", columns={"last_update"}), @ORM\Index(name="tax_number_idx", columns={"tax_number"}), @ORM\Index(name="comments_idx", columns={"comments"})})
 * @ORM\Entity
 */
class SchoolCommittees
{
    /**
     * @var integer
     *
     * @ORM\Column(name="school_committee_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $schoolCommitteeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

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
     * @var \Municipalities
     *
     * @ORM\ManyToOne(targetEntity="Municipalities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="municipality_id", referencedColumnName="municipality_id")
     * })
     */
    private $municipality;

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
     * @var \TaxOffices
     *
     * @ORM\ManyToOne(targetEntity="TaxOffices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_office_id", referencedColumnName="tax_office_id")
     * })
     */
    private $taxOffice;


}
