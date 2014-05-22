<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ImplementationEntities
 *
 * @ORM\Table(name="implementation_entities", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"}), @ORM\UniqueConstraint(name="initials_UNIQUE", columns={"initials"})}, indexes={@ORM\Index(name="street_address_idx", columns={"street_address"}), @ORM\Index(name="postal_code_idx", columns={"postal_code"}), @ORM\Index(name="email_idx", columns={"email"}), @ORM\Index(name="phone_number_idx", columns={"phone_number"}), @ORM\Index(name="domain_idx", columns={"domain"}), @ORM\Index(name="url_idx", columns={"url"})})
 * @ORM\Entity
 */
class ImplementationEntities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="implementation_entity_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $implementationEntityId;

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
     * @var string
     *
     * @ORM\Column(name="street_address", type="string", length=255, nullable=true)
     */
    private $streetAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=255, nullable=true)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=255, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=255, nullable=true)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;


}
