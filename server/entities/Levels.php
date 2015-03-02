<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Levels
 *
 * @ORM\Table(name="levels", indexes={@ORM\Index(name="units_idx", columns={"mm_id"}), @ORM\Index(name="name_idx", columns={"name"}), @ORM\Index(name="groups_count_idx", columns={"groups_count"}), @ORM\Index(name="students_count_idx", columns={"students_count"})})
 * @ORM\Entity
 */
class Levels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="level_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $levelId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="groups_count", type="integer", nullable=true)
     */
    private $groupsCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="students_count", type="integer", nullable=true)
     */
    private $studentsCount;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mm_id", referencedColumnName="mm_id")
     * })
     */
    private $mm;

    public function getLevelId() {
        return $this->levelId;
    }

    public function setLevelId($levelId) {
        $this->levelId = $levelId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getGroupsCount() {
        return $this->groupsCount;
    }

    public function setGroupsCount($groupsCount) {
        $this->groupsCount = $groupsCount;
    }

    public function getStudentsCount() {
        return $this->studentsCount;
    }

    public function setStudentsCount($studentsCount) {
        $this->studentsCount = $studentsCount;
    }

    public function getMm() {
        return $this->mm;
    }

    public function setMm(\Units $mm) {
        $this->mm = $mm;
    }

}