<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TransferAreaMunicipalities
 *
 * @ORM\Table(name="transfer_area_municipalities", indexes={@ORM\Index(name="transfer_areas_idx", columns={"transfer_area_id"}), @ORM\Index(name="municipalities_idx", columns={"municipality_id"})})
 * @ORM\Entity
 */
class TransferAreaMunicipalities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transfer_area_municipality_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transferAreaMunicipalityId;

    /**
     * @var \Municipalities
     *
     * @ORM\ManyToOne(targetEntity="Municipalities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="municipality_id", referencedColumnName="municipality_id")
     * })
     */
    private $municipality;

    /**
     * @var \TransferAreas
     *
     * @ORM\ManyToOne(targetEntity="TransferAreas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transfer_area_id", referencedColumnName="transfer_area_id")
     * })
     */
    private $transferArea;

    public function getTransferAreaMunicipalityId() {
        return $this->transferAreaMunicipalityId;
    }

    public function setTransferAreaMunicipalityId($transferAreaMunicipalityId) {
        $this->transferAreaMunicipalityId = $transferAreaMunicipalityId;
    }

    public function getMunicipality() {
        return $this->municipality;
    }

    public function setMunicipality(\Municipalities $municipality) {
        $this->municipality = $municipality;
    }

    public function getTransferArea() {
        return $this->transferArea;
    }

    public function setTransferArea(\TransferAreas $transferArea) {
        $this->transferArea = $transferArea;
    }

}