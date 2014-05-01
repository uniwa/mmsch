<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Municipalities
 *
 * @ORM\Table(name="municipalities", indexes={@ORM\Index(name="prefectures_idx", columns={"prefecture_id"}), @ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity
 */
class Municipalities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="municipality_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $municipalityId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var \Prefectures
     *
     * @ORM\ManyToOne(targetEntity="Prefectures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prefecture_id", referencedColumnName="prefecture_id")
     * })
     */
    private $prefecture;


}
