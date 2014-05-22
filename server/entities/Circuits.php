<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Circuits
 *
 * @ORM\Table(name="circuits", indexes={@ORM\Index(name="units_idx", columns={"mm_id"}), @ORM\Index(name="phone_number_idx", columns={"phone_number"}), @ORM\Index(name="active_idx", columns={"status"}), @ORM\Index(name="installation_date_idx", columns={"activated_date"}), @ORM\Index(name="paid_by_psd_idx", columns={"paid_by_psd"}), @ORM\Index(name="circuit_types_idx", columns={"circuit_type_id"})})
 * @ORM\Entity
 */
class Circuits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="circuit_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $circuitId;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=45, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="activated_date", type="datetime", nullable=true)
     */
    private $activatedDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paid_by_psd", type="boolean", nullable=true)
     */
    private $paidByPsd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_date", type="datetime", nullable=true)
     */
    private $updatedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deactivated_date", type="datetime", nullable=true)
     */
    private $deactivatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="bandwidth", type="string", length=45, nullable=true)
     */
    private $bandwidth;

    /**
     * @var string
     *
     * @ORM\Column(name="readspeed", type="string", length=45, nullable=true)
     */
    private $readspeed;

    /**
     * @var \CircuitTypes
     *
     * @ORM\ManyToOne(targetEntity="CircuitTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="circuit_type_id", referencedColumnName="circuit_type_id")
     * })
     */
    private $circuitType;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mm_id", referencedColumnName="mm_id")
     * })
     */
    private $mm;

    public function getCircuitId() {
        return $this->circuitId;
    }

    public function setCircuitId($circuitId) {
        $this->circuitId = $circuitId;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getActivatedDate() {
        return $this->activatedDate;
    }

    public function setActivatedDate(\DateTime $activatedDate) {
        $this->activatedDate = $activatedDate;
    }

    public function getPaidByPsd() {
        return $this->paidByPsd;
    }

    public function setPaidByPsd($paidByPsd) {
        $this->paidByPsd = $paidByPsd;
    }

    public function getUpdatedDate() {
        return $this->updatedDate;
    }

    public function setUpdatedDate(\DateTime $updatedDate) {
        $this->updatedDate = $updatedDate;
    }

    public function getDeactivatedDate() {
        return $this->deactivatedDate;
    }

    public function setDeactivatedDate(\DateTime $deactivatedDate) {
        $this->deactivatedDate = $deactivatedDate;
    }

    public function getBandwidth() {
        return $this->bandwidth;
    }

    public function setBandwidth($bandwidth) {
        $this->bandwidth = $bandwidth;
    }

    public function getReadspeed() {
        return $this->readspeed;
    }

    public function setReadspeed($readspeed) {
        $this->readspeed = $readspeed;
    }

    public function getCircuitType() {
        return $this->circuitType;
    }

    public function setCircuitType(\CircuitTypes $circuitType) {
        $this->circuitType = $circuitType;
    }

    public function getMm() {
        return $this->mm;
    }

    public function setMm(\Units $mm) {
        $this->mm = $mm;
    }
}
