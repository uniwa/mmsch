<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ConnectionUnitNetworkSubnets
 *
 * @ORM\Table(name="connection_unit_network_subnets", indexes={@ORM\Index(name="fk_connection_unit_network_subnets_connections1_idx", columns={"connection_id"}), @ORM\Index(name="fk_connection_unit_network_subnets_unit_network_subnets1_idx", columns={"unit_network_subnet_id"})})
 * @ORM\Entity
 */
class ConnectionUnitNetworkSubnets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="connection_unit_network_subnet_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $connectionUnitNetworkSubnetId;

    /**
     * @var \Connections
     *
     * @ORM\ManyToOne(targetEntity="Connections")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="connection_id", referencedColumnName="connection_id")
     * })
     */
    private $connection;

    /**
     * @var \UnitNetworkSubnets
     *
     * @ORM\ManyToOne(targetEntity="UnitNetworkSubnets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_network_subnet_id", referencedColumnName="unit_network_subnet_id")
     * })
     */
    private $unitNetworkSubnet;


}
