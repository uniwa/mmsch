<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * OrientationTypes
 *
 * @ORM\Table(name="orientation_types", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="categories_idx", columns={"category_id"})})
 * @ORM\Entity
 */
class OrientationTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="orientation_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orientationTypeId;

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

    public function getOrientationTypeId() {
        return $this->orientationTypeId;
    }

    public function setOrientationTypeId($orientationTypeId) {
        $this->orientationTypeId = $orientationTypeId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(\Categories $category) {
        $this->category = $category;
    }

}