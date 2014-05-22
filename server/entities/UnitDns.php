<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UnitDns
 *
 * @ORM\Table(name="unit_dns", indexes={@ORM\Index(name="units_idx", columns={"mm_id"}), @ORM\Index(name="unit_dns_idx", columns={"unit_dns"}), @ORM\Index(name="ext_dns_idx", columns={"unit_ext_dns"}), @ORM\Index(name="username_idx", columns={"unit_uid"})})
 * @ORM\Entity
 */
class UnitDns
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unit_dns_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitDnsId;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_dns", type="string", length=255, nullable=true)
     */
    private $unitDns;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_ext_dns", type="string", length=255, nullable=true)
     */
    private $unitExtDns;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_uid", type="string", length=255, nullable=true)
     */
    private $unitUid;

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
