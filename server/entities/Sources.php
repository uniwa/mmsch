<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sources
 *
 * @ORM\Table(name="sources", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class Sources
{
    /**
     * @var integer
     *
     * @ORM\Column(name="source_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;


}
