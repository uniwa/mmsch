<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EducationLevels
 *
 * @ORM\Table(name="education_levels", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class EducationLevels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="education_level_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $educationLevelId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    public function getEducationLevelId() {
        return $this->educationLevelId;
    }

    public function setEducationLevelId($educationLevelId) {
        $this->educationLevelId = $educationLevelId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

}