<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups", indexes={@ORM\Index(name="levels_idx", columns={"level_id"}), @ORM\Index(name="units_idx", columns={"mm_id"}), @ORM\Index(name="name_idx", columns={"name"}), @ORM\Index(name="students_count_idx", columns={"students_count"})})
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="students_count", type="integer", nullable=true)
     */
    private $studentsCount;

    /**
     * @var \Levels
     *
     * @ORM\ManyToOne(targetEntity="Levels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_id", referencedColumnName="level_id")
     * })
     */
    private $level;

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
