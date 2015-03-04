<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Relations
 *
 * @ORM\Table(name="relations", indexes={@ORM\Index(name="host_idx", columns={"host_mm_id"}), @ORM\Index(name="guest_idx", columns={"guest_mm_id"}), @ORM\Index(name="relation_types_idx", columns={"relation_type_id"}), @ORM\Index(name="true_date_idx", columns={"true_date"}), @ORM\Index(name="true_fek_idx", columns={"true_fek"}), @ORM\Index(name="false_date_idx", columns={"false_date"}), @ORM\Index(name="false_fek_idx", columns={"false_fek"})})
 * @ORM\Entity
 */
class Relations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="relation_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $relationId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="relation_state", type="boolean", nullable=true)
     */
    private $relationState;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="true_date", type="datetime", nullable=true)
     */
    private $trueDate;

    /**
     * @var string
     *
     * @ORM\Column(name="true_fek", type="string", length=255, nullable=true)
     */
    private $trueFek;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="false_date", type="datetime", nullable=true)
     */
    private $falseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="false_fek", type="string", length=255, nullable=true)
     */
    private $falseFek;

    /**
     * @var \RelationTypes
     *
     * @ORM\ManyToOne(targetEntity="RelationTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="relation_type_id", referencedColumnName="relation_type_id")
     * })
     */
    private $relationType;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="guest_mm_id", referencedColumnName="mm_id")
     * })
     */
    private $guestMm;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="host_mm_id", referencedColumnName="mm_id")
     * })
     */
    private $hostMm;

    public function getRelationId() {
        return $this->relationId;
    }

    public function setRelationId($relationId) {
        $this->relationId = $relationId;
    }

    public function getRelationState() {
        return $this->relationState;
    }

    public function setRelationState($relationState) {
        $this->relationState = $relationState;
    }

    public function getTrueDate() {
        return $this->trueDate;
    }

    public function setTrueDate(\DateTime $trueDate) {
        $this->trueDate = $trueDate;
    }

    public function getTrueFek() {
        return $this->trueFek;
    }

    public function setTrueFek($trueFek) {
        $this->trueFek = $trueFek;
    }

    public function getFalseDate() {
        return $this->falseDate;
    }

    public function setFalseDate(\DateTime $falseDate) {
        $this->falseDate = $falseDate;
    }

    public function getFalseFek() {
        return $this->falseFek;
    }

    public function setFalseFek($falseFek) {
        $this->falseFek = $falseFek;
    }

    public function getRelationType() {
        return $this->relationType;
    }

    public function setRelationType(\RelationTypes $relationType) {
        $this->relationType = $relationType;
    }

    public function getGuestMm() {
        return $this->guestMm;
    }

    public function setGuestMm(\Units $guestMm) {
        $this->guestMm = $guestMm;
    }

    public function getHostMm() {
        return $this->hostMm;
    }

    public function setHostMm(\Units $hostMm) {
        $this->hostMm = $hostMm;
    }

}