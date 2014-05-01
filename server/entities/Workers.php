<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Workers
 *
 * @ORM\Table(name="workers", uniqueConstraints={@ORM\UniqueConstraint(name="registry_no_UNIQUE", columns={"registry_no"})}, indexes={@ORM\Index(name="worker_specializations_idx", columns={"worker_specialization_id"}), @ORM\Index(name="tax_number_idx", columns={"tax_number"}), @ORM\Index(name="lastname_idx", columns={"lastname"}), @ORM\Index(name="firstname_idx", columns={"firstname"}), @ORM\Index(name="fathername_idx", columns={"fathername"}), @ORM\Index(name="sex_idx", columns={"sex"})})
 * @ORM\Entity
 */
class Workers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="worker_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $workerId;

    /**
     * @var string
     *
     * @ORM\Column(name="registry_no", type="string", length=255, nullable=false)
     */
    private $registryNo;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_number", type="string", length=255, nullable=true)
     */
    private $taxNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="fathername", type="string", length=255, nullable=true)
     */
    private $fathername;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=1, nullable=true)
     */
    private $sex;

    /**
     * @var \WorkerSpecializations
     *
     * @ORM\ManyToOne(targetEntity="WorkerSpecializations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="worker_specialization_id", referencedColumnName="worker_specialization_id")
     * })
     */
    private $workerSpecialization;


}
