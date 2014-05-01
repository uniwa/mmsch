<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UnitNetworkObjects
 *
 * @ORM\Table(name="unit_network_objects", indexes={@ORM\Index(name="fk_unit_network_objects_unit_network_subnets_idx", columns={"unit_network_subnet_id"})})
 * @ORM\Entity
 */
class UnitNetworkObjects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unit_network_object_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitNetworkObjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=true)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="object_dns_name", type="string", length=255, nullable=true)
     */
    private $objectDnsName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

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
