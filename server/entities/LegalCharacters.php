<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * LegalCharacters
 *
 * @ORM\Table(name="legal_characters", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="categories_idx", columns={"category_id"})})
 * @ORM\Entity
 */
class LegalCharacters
{
    /**
     * @var integer
     *
     * @ORM\Column(name="legal_character_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $legalCharacterId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;


}
