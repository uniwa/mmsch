<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EduAdmins
 *
 * @ORM\Table(name="edu_admins", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="region_edu_admins_idx", columns={"region_edu_admin_id"}), @ORM\Index(name="implementation_entities_idx", columns={"implementation_entity_id"})})
 * @ORM\Entity
 */
class EduAdmins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="edu_admin_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eduAdminId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

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
     * @var \RegionEduAdmins
     *
     * @ORM\ManyToOne(targetEntity="RegionEduAdmins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_edu_admin_id", referencedColumnName="region_edu_admin_id")
     * })
     */
    private $regionEduAdmin;

    public function getEduAdminId() {
        return $this->eduAdminId;
    }

    public function setEduAdminId($eduAdminId) {
        $this->eduAdminId = $eduAdminId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getImplementationEntity() {
        return $this->implementationEntity;
    }

    public function setImplementationEntity(\ImplementationEntities $implementationEntity) {
        $this->implementationEntity = $implementationEntity;
    }

    public function getRegionEduAdmin() {
        return $this->regionEduAdmin;
    }

    public function setRegionEduAdmin(\RegionEduAdmins $regionEduAdmin) {
        $this->regionEduAdmin = $regionEduAdmin;
    }
}
