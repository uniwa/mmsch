<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UnitWorkers
 *
 * @ORM\Table(name="unit_workers", uniqueConstraints={@ORM\UniqueConstraint(name="mm_id_workers_worker_position_UNIQUE", columns={"mm_id", "worker_id", "worker_position_id"})}, indexes={@ORM\Index(name="workers_idx", columns={"worker_id"}), @ORM\Index(name="worker_positions_idx", columns={"worker_position_id"}), @ORM\Index(name="units_idx", columns={"mm_id"})})
 * @ORM\Entity
 */
class UnitWorkers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unit_worker_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitWorkerId;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mm_id", referencedColumnName="mm_id")
     * })
     */
    private $mm;

    /**
     * @var \Workers
     *
     * @ORM\ManyToOne(targetEntity="Workers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="worker_id", referencedColumnName="worker_id")
     * })
     */
    private $worker;

    /**
     * @var \WorkerPositions
     *
     * @ORM\ManyToOne(targetEntity="WorkerPositions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="worker_position_id", referencedColumnName="worker_position_id")
     * })
     */
    private $workerPosition;

    public function getUnitWorkerId() {
        return $this->unitWorkerId;
    }

    public function setUnitWorkerId($unitWorkerId) {
        $this->unitWorkerId = $unitWorkerId;
    }

    public function getMm() {
        return $this->mm;
    }

    public function setMm(\Units $mm) {
        $this->mm = $mm;
    }

    public function getWorker() {
        return $this->worker;
    }

    public function setWorker(\Workers $worker) {
        $this->worker = $worker;
    }

    public function getWorkerPosition() {
        return $this->workerPosition;
    }

    public function setWorkerPosition(\WorkerPositions $workerPosition) {
        $this->workerPosition = $workerPosition;
    }

}
