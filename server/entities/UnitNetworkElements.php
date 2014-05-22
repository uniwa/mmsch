<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UnitNetworkElements
 *
 * @ORM\Table(name="unit_network_elements", indexes={@ORM\Index(name="units_idx", columns={"mm_id"}), @ORM\Index(name="router_dns_idx", columns={"router_dns"}), @ORM\Index(name="ip_lan_idx", columns={"ip_lan"}), @ORM\Index(name="ip_router_idx", columns={"ip_router"}), @ORM\Index(name="ip_nat_idx", columns={"ip_nat"}), @ORM\Index(name="ip_masks_lan_idx", columns={"ip_lan_mask_id"}), @ORM\Index(name="ip_masks_nat_idx", columns={"ip_nat_mask_id"})})
 * @ORM\Entity
 */
class UnitNetworkElements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unit_network_element_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitNetworkElementId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_router", type="string", length=255, nullable=true)
     */
    private $ipRouter;

    /**
     * @var string
     *
     * @ORM\Column(name="router_dns", type="string", length=255, nullable=true)
     */
    private $routerDns;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_lan", type="string", length=255, nullable=true)
     */
    private $ipLan;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_nat", type="string", length=255, nullable=true)
     */
    private $ipNat;

    /**
     * @var \IpMasks
     *
     * @ORM\ManyToOne(targetEntity="IpMasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ip_lan_mask_id", referencedColumnName="ip_mask_id")
     * })
     */
    private $ipLanMask;

    /**
     * @var \IpMasks
     *
     * @ORM\ManyToOne(targetEntity="IpMasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ip_nat_mask_id", referencedColumnName="ip_mask_id")
     * })
     */
    private $ipNatMask;

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
