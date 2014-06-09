<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Prefectures
 *
 * @ORM\Table(name="prefectures", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class Prefectures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prefecture_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prefectureId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    public function getPrefectureId() {
        return $this->prefectureId;
    }

    public function setPrefectureId($prefectureId) {
        $this->prefectureId = $prefectureId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}
