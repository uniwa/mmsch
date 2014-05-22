<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Cpes
 *
 * @ORM\Table(name="cpes", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="fk_cpes_units_idx", columns={"mm_id"})})
 * @ORM\Entity
 */
class Cpes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cpe_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mm_id", referencedColumnName="mm_id")
     * })
     */
    private $mm;


}
