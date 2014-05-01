<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UnitNetworkSubnets
 *
 * @ORM\Table(name="unit_network_subnets", indexes={@ORM\Index(name="fk_unit_network_subnets_units1_idx", columns={"mm_id"}), @ORM\Index(name="fk_unit_network_subnets_unit_network_subnet_types1_idx", columns={"unit_network_subnet_type_id"})})
 * @ORM\Entity
 */
class UnitNetworkSubnets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unit_network_subnet_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitNetworkSubnetId;

    /**
     * @var string
     *
     * @ORM\Column(name="subnet_name", type="string", length=255, nullable=true)
     */
    private $subnetName;

    /**
     * @var string
     *
     * @ORM\Column(name="subnet_ip", type="string", length=255, nullable=true)
     */
    private $subnetIp;

    /**
     * @var string
     *
     * @ORM\Column(name="subnet_default_router", type="string", length=255, nullable=true)
     */
    private $subnetDefaultRouter;

    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=45, nullable=true)
     */
    private $mask;

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
     * @var \UnitNetworkSubnetTypes
     *
     * @ORM\ManyToOne(targetEntity="UnitNetworkSubnetTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_network_subnet_type_id", referencedColumnName="unit_network_subnet_type_id")
     * })
     */
    private $unitNetworkSubnetType;


}
