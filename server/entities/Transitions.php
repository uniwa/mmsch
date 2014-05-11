<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Transitions
 *
 * @ORM\Table(name="transitions", indexes={@ORM\Index(name="units_idx", columns={"mm_id"}), @ORM\Index(name="states_from_idx", columns={"from_state_id"}), @ORM\Index(name="states_to_idx", columns={"to_state_id"}), @ORM\Index(name="fek_idx", columns={"fek"}), @ORM\Index(name="transition_date_idx", columns={"transition_date"})})
 * @ORM\Entity
 */
class Transitions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transition_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transitionId;

    /**
     * @var string
     *
     * @ORM\Column(name="fek", type="string", length=255, nullable=true)
     */
    private $fek;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="transition_date", type="datetime", nullable=true)
     */
    private $transitionDate;

    /**
     * @var \States
     *
     * @ORM\ManyToOne(targetEntity="States")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="from_state_id", referencedColumnName="state_id")
     * })
     */
    private $fromState;

    /**
     * @var \States
     *
     * @ORM\ManyToOne(targetEntity="States")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_state_id", referencedColumnName="state_id")
     * })
     */
    private $toState;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mm_id", referencedColumnName="mm_id")
     * })
     */
    private $mm;

    public function getTransitionId() {
        return $this->transitionId;
    }

    public function setTransitionId($transitionId) {
        $this->transitionId = $transitionId;
    }

    public function getFek() {
        return $this->fek;
    }

    public function setFek($fek) {
        $this->fek = $fek;
    }

    public function getTransitionDate() {
        return $this->transitionDate;
    }

    public function setTransitionDate(\DateTime $transitionDate) {
        $this->transitionDate = $transitionDate;
    }

    public function getFromState() {
        return $this->fromState;
    }

    public function setFromState(\States $fromState) {
        $this->fromState = $fromState;
    }

    public function getToState() {
        return $this->toState;
    }

    public function setToState(\States $toState) {
        $this->toState = $toState;
    }

    public function getMm() {
        return $this->mm;
    }

    public function setMm(\Units $mm) {
        $this->mm = $mm;
    }
}
