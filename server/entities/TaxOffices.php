<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TaxOffices
 *
 * @ORM\Table(name="tax_offices", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})})
 * @ORM\Entity
 */
class TaxOffices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tax_office_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taxOfficeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;


}
