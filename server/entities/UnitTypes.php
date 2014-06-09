<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UnitTypes
 *
 * @ORM\Table(name="unit_types", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"}), @ORM\UniqueConstraint(name="initials_UNIQUE", columns={"initials"})}, indexes={@ORM\Index(name="categories_idx", columns={"category_id"}), @ORM\Index(name="education_levels_idx", columns={"education_level_id"})})
 * @ORM\Entity
 */
class UnitTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unit_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="initials", type="string", length=255, nullable=false)
     */
    private $initials;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

    /**
     * @var \EducationLevels
     *
     * @ORM\ManyToOne(targetEntity="EducationLevels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="education_level_id", referencedColumnName="education_level_id")
     * })
     */
    private $educationLevel;

    public function getUnitTypeId() {
        return $this->unitTypeId;
    }

    public function setUnitTypeId($unitTypeId) {
        $this->unitTypeId = $unitTypeId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getInitials() {
        return $this->initials;
    }

    public function setInitials($initials) {
        $this->initials = $initials;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(\Categories $category) {
        $this->category = $category;
    }

    public function getEducationLevel() {
        return $this->educationLevel;
    }

    public function setEducationLevel(\EducationLevels $educationLevel) {
        $this->educationLevel = $educationLevel;
    }
}
