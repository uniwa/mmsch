<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CircuitTypes
 *
 * @ORM\Table(name="circuit_types", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class CircuitTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="circuit_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $circuitTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    public function getCircuitTypeId() {
        return $this->circuitTypeId;
    }

    public function setCircuitTypeId($circuitTypeId) {
        $this->circuitTypeId = $circuitTypeId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}
