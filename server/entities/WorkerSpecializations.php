<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WorkerSpecializations
 *
 * @ORM\Table(name="worker_specializations", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class WorkerSpecializations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="worker_specialization_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $workerSpecializationId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;


}
