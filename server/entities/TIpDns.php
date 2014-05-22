<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TIpDns
 *
 * @ORM\Table(name="t_ip_dns", indexes={@ORM\Index(name="IX_t_IP_DNS", columns={"SCH_ID"}), @ORM\Index(name="IX_t_IP_DNS_1", columns={"USERNAME"}), @ORM\Index(name="IX_t_IP_DNS_2", columns={"AA"}), @ORM\Index(name="IX_t_IP_DNS_3", columns={"IP_ROUTER"}), @ORM\Index(name="IX_t_IP_DNS_4", columns={"IP_NAT"})})
 * @ORM\Entity
 */
class TIpDns
{
    /**
     * @var string
     *
     * @ORM\Column(name="SCH_ID", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $schId;

    /**
     * @var integer
     *
     * @ORM\Column(name="MULTIPLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $multiple;

    /**
     * @var integer
     *
     * @ORM\Column(name="AA", type="integer", nullable=true)
     */
    private $aa;

    /**
     * @var string
     *
     * @ORM\Column(name="SCH_DNS", type="string", length=30, nullable=true)
     */
    private $schDns;

    /**
     * @var string
     *
     * @ORM\Column(name="EXT_DNS", type="string", length=30, nullable=true)
     */
    private $extDns;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVED_BY", type="string", length=20, nullable=true)
     */
    private $servedBy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ROUTER", type="boolean", nullable=true)
     */
    private $router;

    /**
     * @var string
     *
     * @ORM\Column(name="ROUTER_ORIGIN", type="string", length=20, nullable=true)
     */
    private $routerOrigin;

    /**
     * @var string
     *
     * @ORM\Column(name="ROUTER_DNS", type="string", length=50, nullable=true)
     */
    private $routerDns;

    /**
     * @var string
     *
     * @ORM\Column(name="IP_LAN", type="string", length=20, nullable=true)
     */
    private $ipLan;

    /**
     * @var string
     *
     * @ORM\Column(name="IP_LAN_MASK", type="string", length=20, nullable=true)
     */
    private $ipLanMask;

    /**
     * @var string
     *
     * @ORM\Column(name="IP_ROUTER", type="string", length=20, nullable=true)
     */
    private $ipRouter;

    /**
     * @var string
     *
     * @ORM\Column(name="IP_NAT", type="string", length=20, nullable=true)
     */
    private $ipNat;

    /**
     * @var string
     *
     * @ORM\Column(name="IP_NAT_MASK", type="string", length=20, nullable=true)
     */
    private $ipNatMask;

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME", type="string", length=20, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="PWD", type="string", length=20, nullable=true)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROUTER_TYPE_ID", type="integer", nullable=true)
     */
    private $routerTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="ROUTER_IOS", type="string", length=30, nullable=true)
     */
    private $routerIos;

    /**
     * @var string
     *
     * @ORM\Column(name="CONF_VERSION", type="string", length=30, nullable=true)
     */
    private $confVersion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CONF_MODIF_DATE", type="datetime", nullable=true)
     */
    private $confModifDate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONF_MODIF_USER", type="string", length=30, nullable=true)
     */
    private $confModifUser;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_NO", type="string", length=20, nullable=true)
     */
    private $lineNo;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_TYPE", type="string", length=30, nullable=true)
     */
    private $lineType;

    /**
     * @var string
     *
     * @ORM\Column(name="BANDWIDTH", type="string", length=15, nullable=true)
     */
    private $bandwidth;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LINE_AITHSH", type="datetime", nullable=true)
     */
    private $lineAithsh;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_COMMENTS", type="string", length=100, nullable=true)
     */
    private $lineComments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LINE_DEL", type="datetime", nullable=true)
     */
    private $lineDel;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_DEL_PERSON", type="string", length=50, nullable=true)
     */
    private $lineDelPerson;

    /**
     * @var integer
     *
     * @ORM\Column(name="LAB_TYPE_ID", type="integer", nullable=true)
     */
    private $labTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="LAB_PCS", type="string", length=40, nullable=true)
     */
    private $labPcs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="INITIAL_CONF", type="boolean", nullable=true)
     */
    private $initialConf;

    /**
     * @var integer
     *
     * @ORM\Column(name="MODEM_TYPE_ID", type="integer", nullable=true)
     */
    private $modemTypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="VOIP_TYPE_ID", type="integer", nullable=true)
     */
    private $voipTypeId;


}
