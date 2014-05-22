<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Ldaps
 *
 * @ORM\Table(name="ldaps", indexes={@ORM\Index(name="units_idx", columns={"mm_id"}), @ORM\Index(name="uid_idx", columns={"uid"})})
 * @ORM\Entity
 */
class Ldaps
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ldap_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ldapId;

    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=255, nullable=true)
     */
    private $uid;

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
