<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Addrspaces
 *
 * @ORM\Table(name="addrspaces", indexes={@ORM\Index(name="ip_masks_idx", columns={"ip_mask_id"}), @ORM\Index(name="prefectures_idx", columns={"prefecture_id"}), @ORM\Index(name="addrspace_types_idx", columns={"addrspace_type_id"}), @ORM\Index(name="ip_idx", columns={"ip"}), @ORM\Index(name="size_idx", columns={"size"})})
 * @ORM\Entity
 */
class Addrspaces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="addrspace_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addrspaceId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=true)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @var \AddrspaceTypes
     *
     * @ORM\ManyToOne(targetEntity="AddrspaceTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addrspace_type_id", referencedColumnName="addrspace_type_id")
     * })
     */
    private $addrspaceType;

    /**
     * @var \IpMasks
     *
     * @ORM\ManyToOne(targetEntity="IpMasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ip_mask_id", referencedColumnName="ip_mask_id")
     * })
     */
    private $ipMask;

    /**
     * @var \Prefectures
     *
     * @ORM\ManyToOne(targetEntity="Prefectures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prefecture_id", referencedColumnName="prefecture_id")
     * })
     */
    private $prefecture;


}
