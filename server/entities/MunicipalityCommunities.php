<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * MunicipalityCommunities
 *
 * @ORM\Table(name="municipality_communities", uniqueConstraints={@ORM\UniqueConstraint(name="myschoolMunicipalityCommunityId_UNIQUE", columns={"myschoolMunicipalityCommunityId"})}, indexes={@ORM\Index(name="municipality_idx", columns={"municipality_id"}), @ORM\Index(name="name_idx", columns={"name_id"})})
 * @ORM\Entity
 */
class MunicipalityCommunities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="municipality_community_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $municipalityCommunityId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="myschoolMunicipalityCommunityId", type="integer", nullable=false)
     */
    private $myschoolMunicipalityCommunityId;
    
    /**
     * @var \Municipalities
     *
     * @ORM\ManyToOne(targetEntity="Municipalities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="municipality_id", referencedColumnName="municipality_id")
     * })
     */
    private $municipality;

    public function getMunicipalityCommunityId() {
        return $this->municipalityCommunityId;
    }

    public function setMunicipalityCommunityId($municipalityCommunityId) {
        $this->municipalityCommunityId = $municipalityCommunityId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getMyschoolMunicipalityCommunityId() {
        return $this->myschoolMunicipalityCommunityId;
    }

    public function setMyschoolMunicipalityCommunityId($myschoolMunicipalityCommunityId) {
        $this->myschoolMunicipalityCommunityId = $myschoolMunicipalityCommunityId;
    }

    public function getMunicipality() {
        return $this->municipality;
    }

    public function setMunicipality(\Municipalities $municipality) {
        $this->municipality = $municipality;
    }

}