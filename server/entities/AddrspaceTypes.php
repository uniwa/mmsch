<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AddrspaceTypes
 *
 * @ORM\Table(name="addrspace_types", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class AddrspaceTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="addrspace_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addrspaceTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;


}
