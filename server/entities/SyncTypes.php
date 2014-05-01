<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SyncTypes
 *
 * @ORM\Table(name="sync_types", indexes={@ORM\Index(name="orientation_types_idx", columns={"orientation_type_id"}), @ORM\Index(name="operation_shifts_idx", columns={"operation_shift_id"}), @ORM\Index(name="legal_characters_idx", columns={"legal_character_id"}), @ORM\Index(name="unit_types_idx", columns={"unit_type_id"}), @ORM\Index(name="special_types_idx", columns={"special_type_id"}), @ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity
 */
class SyncTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sync_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $syncTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \LegalCharacters
     *
     * @ORM\ManyToOne(targetEntity="LegalCharacters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="legal_character_id", referencedColumnName="legal_character_id")
     * })
     */
    private $legalCharacter;

    /**
     * @var \OperationShifts
     *
     * @ORM\ManyToOne(targetEntity="OperationShifts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operation_shift_id", referencedColumnName="operation_shift_id")
     * })
     */
    private $operationShift;

    /**
     * @var \OrientationTypes
     *
     * @ORM\ManyToOne(targetEntity="OrientationTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orientation_type_id", referencedColumnName="orientation_type_id")
     * })
     */
    private $orientationType;

    /**
     * @var \SpecialTypes
     *
     * @ORM\ManyToOne(targetEntity="SpecialTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_type_id", referencedColumnName="special_type_id")
     * })
     */
    private $specialType;

    /**
     * @var \UnitTypes
     *
     * @ORM\ManyToOne(targetEntity="UnitTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_type_id", referencedColumnName="unit_type_id")
     * })
     */
    private $unitType;


}
