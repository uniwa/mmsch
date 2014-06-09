<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TransferAreas
 *
 * @ORM\Table(name="transfer_areas", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="edu_admins_idx", columns={"edu_admin_id"})})
 * @ORM\Entity
 */
class TransferAreas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transfer_area_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transferAreaId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \EduAdmins
     *
     * @ORM\ManyToOne(targetEntity="EduAdmins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edu_admin_id", referencedColumnName="edu_admin_id")
     * })
     */
    private $eduAdmin;

    public function getTransferAreaId() {
        return $this->transferAreaId;
    }

    public function setTransferAreaId($transferAreaId) {
        $this->transferAreaId = $transferAreaId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEduAdmin() {
        return $this->eduAdmin;
    }

    public function setEduAdmin(\EduAdmins $eduAdmin) {
        $this->eduAdmin = $eduAdmin;
    }
}
