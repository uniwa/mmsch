<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * IpMasks
 *
 * @ORM\Table(name="ip_masks", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class IpMasks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ip_mask_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ipMaskId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;


}
