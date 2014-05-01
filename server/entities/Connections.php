<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Connections
 *
 * @ORM\Table(name="connections", indexes={@ORM\Index(name="cpes_idx", columns={"cpe_id"}), @ORM\Index(name="ldap_idx", columns={"ldap_id"}), @ORM\Index(name="unit_network_elements_idx", columns={"unit_network_element_id"}), @ORM\Index(name="units_idx", columns={"mm_id"}), @ORM\Index(name="circuits_idx", columns={"circuit_id"})})
 * @ORM\Entity
 */
class Connections
{
    /**
     * @var integer
     *
     * @ORM\Column(name="connection_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $connectionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_network_element_id", type="integer", nullable=true)
     */
    private $unitNetworkElementId;

    /**
     * @var \Circuits
     *
     * @ORM\ManyToOne(targetEntity="Circuits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="circuit_id", referencedColumnName="circuit_id")
     * })
     */
    private $circuit;

    /**
     * @var \Cpes
     *
     * @ORM\ManyToOne(targetEntity="Cpes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cpe_id", referencedColumnName="cpe_id")
     * })
     */
    private $cpe;

    /**
     * @var \Ldaps
     *
     * @ORM\ManyToOne(targetEntity="Ldaps")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ldap_id", referencedColumnName="ldap_id")
     * })
     */
    private $ldap;

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
