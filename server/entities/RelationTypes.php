<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * RelationTypes
 *
 * @ORM\Table(name="relation_types", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class RelationTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="relation_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $relationTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    public function getRelationTypeId() {
        return $this->relationTypeId;
    }

    public function setRelationTypeId($relationTypeId) {
        $this->relationTypeId = $relationTypeId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

}