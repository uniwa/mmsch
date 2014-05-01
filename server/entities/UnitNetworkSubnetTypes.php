<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UnitNetworkSubnetTypes
 *
 * @ORM\Table(name="unit_network_subnet_types")
 * @ORM\Entity
 */
class UnitNetworkSubnetTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unit_network_subnet_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitNetworkSubnetTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="subnet_type", type="string", length=255, nullable=true)
     */
    private $subnetType;


}
