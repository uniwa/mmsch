<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Monades
 *
 * @ORM\Table(name="monades", indexes={@ORM\Index(name="FK_MONADES_G4_DIAMERISMATA_OTA", columns={"DIAMERISMA_ID"}), @ORM\Index(name="IX_MONADES", columns={"ONOMASIA"}), @ORM\Index(name="IX_MONADES_1", columns={"NOMOS_ID"}), @ORM\Index(name="IX_MONADES_2", columns={"FY_ID"}), @ORM\Index(name="IX_MONADES_3", columns={"ACTUAL_DATE"}), @ORM\Index(name="IX_MONADES_4", columns={"AA"}), @ORM\Index(name="IX_MONADES_katarghsh", columns={"KATARGHSH"}), @ORM\Index(name="IX_MONADES_texnikos", columns={"TEXNIKOS_ID"}), @ORM\Index(name="IX_MONADES_type_eid", columns={"TYPE_EID_ID"}), @ORM\Index(name="IX_MONADES_type_gen", columns={"TYPE_GEN_ID"}), @ORM\Index(name="IX_MONADES_wrario", columns={"WRARIO_ID"}), @ORM\Index(name="IX_MONDES_EDU_D1", columns={"EDU_D1"}), @ORM\Index(name="IX_MONDES_EDU_D2", columns={"EDU_D2"})})
 * @ORM\Entity
 */
class Monades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="AA", type="integer", nullable=false)
     */
    private $aa;

    /**
     * @var string
     *
     * @ORM\Column(name="GLUC", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gluc;

    /**
     * @var string
     *
     * @ORM\Column(name="DSDE_ID", type="string", length=10, nullable=true)
     */
    private $dsdeId;

    /**
     * @var string
     *
     * @ORM\Column(name="YPEPTH_ID", type="string", length=10, nullable=true)
     */
    private $ypepthId;

    /**
     * @var string
     *
     * @ORM\Column(name="EDU_D1", type="string", length=20, nullable=true)
     */
    private $eduD1;

    /**
     * @var string
     *
     * @ORM\Column(name="EDU_D2", type="string", length=10, nullable=true)
     */
    private $eduD2;

    /**
     * @var string
     *
     * @ORM\Column(name="ONOMASIA", type="string", length=120, nullable=true)
     */
    private $onomasia;

    /**
     * @var string
     *
     * @ORM\Column(name="ONOMASIA_OLD", type="string", length=120, nullable=true)
     */
    private $onomasiaOld;

    /**
     * @var integer
     *
     * @ORM\Column(name="ONOMASIA_ARITHMOS", type="integer", nullable=true)
     */
    private $onomasiaArithmos;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYPE_GEN_ID", type="integer", nullable=true)
     */
    private $typeGenId;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYPE_EID_ID", type="integer", nullable=true)
     */
    private $typeEidId;

    /**
     * @var string
     *
     * @ORM\Column(name="ONOMASIA_TOPOS", type="string", length=60, nullable=true)
     */
    private $onomasiaTopos;

    /**
     * @var string
     *
     * @ORM\Column(name="ONOMASIA_PROSONYMIO", type="string", length=50, nullable=true)
     */
    private $onomasiaProsonymio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORGANIKOTHTA", type="integer", nullable=true)
     */
    private $organikothta;

    /**
     * @var string
     *
     * @ORM\Column(name="KATHGORIA", type="string", length=5, nullable=true)
     */
    private $kathgoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="TMHMATA", type="integer", nullable=true)
     */
    private $tmhmata;

    /**
     * @var integer
     *
     * @ORM\Column(name="MATHITES", type="integer", nullable=true)
     */
    private $mathites;

    /**
     * @var integer
     *
     * @ORM\Column(name="PERIFEREIA_SXOL_SYMV", type="integer", nullable=true)
     */
    private $perifereiaSxolSymv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LT", type="boolean", nullable=true)
     */
    private $lt;

    /**
     * @var string
     *
     * @ORM\Column(name="ODOS", type="string", length=75, nullable=true)
     */
    private $odos;

    /**
     * @var string
     *
     * @ORM\Column(name="ARITHM", type="string", length=20, nullable=true)
     */
    private $arithm;

    /**
     * @var string
     *
     * @ORM\Column(name="TK", type="string", length=8, nullable=true)
     */
    private $tk;

    /**
     * @var string
     *
     * @ORM\Column(name="PERIOXH", type="string", length=50, nullable=true)
     */
    private $perioxh;

    /**
     * @var string
     *
     * @ORM\Column(name="DIAMERISMA_ID", type="string", length=8, nullable=true)
     */
    private $diamerismaId;

    /**
     * @var string
     *
     * @ORM\Column(name="DHMOS_ID", type="string", length=10, nullable=true)
     */
    private $dhmosId;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMOS_ID", type="string", length=2, nullable=true)
     */
    private $nomosId;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL_CODE", type="string", length=5, nullable=true)
     */
    private $telCode;

    /**
     * @var string
     *
     * @ORM\Column(name="THLEF_1", type="string", length=30, nullable=true)
     */
    private $thlef1;

    /**
     * @var string
     *
     * @ORM\Column(name="THLEF_2", type="string", length=20, nullable=true)
     */
    private $thlef2;

    /**
     * @var string
     *
     * @ORM\Column(name="ESWT_THL", type="string", length=10, nullable=true)
     */
    private $eswtThl;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="AFM", type="string", length=50, nullable=true)
     */
    private $afm;

    /**
     * @var string
     *
     * @ORM\Column(name="ONOMASIA_SE", type="string", length=150, nullable=true)
     */
    private $onomasiaSe;

    /**
     * @var string
     *
     * @ORM\Column(name="AFM_SE", type="string", length=15, nullable=true)
     */
    private $afmSe;

    /**
     * @var string
     *
     * @ORM\Column(name="DOY", type="string", length=50, nullable=true)
     */
    private $doy;

    /**
     * @var string
     *
     * @ORM\Column(name="DIEY8YNTHS", type="string", length=50, nullable=true)
     */
    private $diey8ynths;

    /**
     * @var string
     *
     * @ORM\Column(name="YPEY8YNOS", type="string", length=50, nullable=true)
     */
    private $ypey8ynos;

    /**
     * @var string
     *
     * @ORM\Column(name="THLEF_3", type="string", length=60, nullable=true)
     */
    private $thlef3;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_CONTACT", type="string", length=50, nullable=true)
     */
    private $emailContact;

    /**
     * @var string
     *
     * @ORM\Column(name="WRARIO_ID", type="string", length=10, nullable=true)
     */
    private $wrarioId;

    /**
     * @var string
     *
     * @ORM\Column(name="SYSTEGASH", type="string", length=50, nullable=true)
     */
    private $systegash;

    /**
     * @var string
     *
     * @ORM\Column(name="MON_SYSTEG", type="string", length=100, nullable=true)
     */
    private $monSysteg;

    /**
     * @var string
     *
     * @ORM\Column(name="LEITOYRGIA", type="string", length=50, nullable=true)
     */
    private $leitoyrgia;

    /**
     * @var integer
     *
     * @ORM\Column(name="FY_ID", type="integer", nullable=true)
     */
    private $fyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="FY_49", type="integer", nullable=true)
     */
    private $fy49;

    /**
     * @var integer
     *
     * @ORM\Column(name="FY_50A", type="integer", nullable=true)
     */
    private $fy50a;

    /**
     * @var integer
     *
     * @ORM\Column(name="FY_6_11", type="integer", nullable=true)
     */
    private $fy611;

    /**
     * @var integer
     *
     * @ORM\Column(name="FY_PEEP", type="integer", nullable=true)
     */
    private $fyPeep;

    /**
     * @var integer
     *
     * @ORM\Column(name="TEXNIKOS_ID", type="integer", nullable=true)
     */
    private $texnikosId;

    /**
     * @var string
     *
     * @ORM\Column(name="TechnFY", type="string", length=50, nullable=true)
     */
    private $technfy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ISDN1", type="boolean", nullable=true)
     */
    private $isdn1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ISDN2", type="boolean", nullable=true)
     */
    private $isdn2;

    /**
     * @var string
     *
     * @ORM\Column(name="DIALUP_COMMENTS", type="string", length=50, nullable=true)
     */
    private $dialupComments;

    /**
     * @var string
     *
     * @ORM\Column(name="OK_Proetoimasia", type="string", length=50, nullable=true)
     */
    private $okProetoimasia;

    /**
     * @var string
     *
     * @ORM\Column(name="ikr_ktirio", type="string", length=50, nullable=true)
     */
    private $ikrKtirio;

    /**
     * @var string
     *
     * @ORM\Column(name="ikr_orof", type="string", length=50, nullable=true)
     */
    private $ikrOrof;

    /**
     * @var string
     *
     * @ORM\Column(name="ikr_aith", type="string", length=50, nullable=true)
     */
    private $ikrAith;

    /**
     * @var string
     *
     * @ORM\Column(name="Reyma_asfal", type="string", length=50, nullable=true)
     */
    private $reymaAsfal;

    /**
     * @var string
     *
     * @ORM\Column(name="pr1_ktirio", type="string", length=50, nullable=true)
     */
    private $pr1Ktirio;

    /**
     * @var string
     *
     * @ORM\Column(name="pr1_orof", type="string", length=50, nullable=true)
     */
    private $pr1Orof;

    /**
     * @var string
     *
     * @ORM\Column(name="pr1_aith", type="string", length=50, nullable=true)
     */
    private $pr1Aith;

    /**
     * @var string
     *
     * @ORM\Column(name="pr1_apost", type="string", length=20, nullable=true)
     */
    private $pr1Apost;

    /**
     * @var string
     *
     * @ORM\Column(name="pr2_ktirio", type="string", length=50, nullable=true)
     */
    private $pr2Ktirio;

    /**
     * @var string
     *
     * @ORM\Column(name="pr2_orof", type="string", length=50, nullable=true)
     */
    private $pr2Orof;

    /**
     * @var string
     *
     * @ORM\Column(name="pr2_aith", type="string", length=50, nullable=true)
     */
    private $pr2Aith;

    /**
     * @var string
     *
     * @ORM\Column(name="pr2_apost", type="string", length=20, nullable=true)
     */
    private $pr2Apost;

    /**
     * @var string
     *
     * @ORM\Column(name="pr3_ktirio", type="string", length=50, nullable=true)
     */
    private $pr3Ktirio;

    /**
     * @var string
     *
     * @ORM\Column(name="pr3_orof", type="string", length=50, nullable=true)
     */
    private $pr3Orof;

    /**
     * @var string
     *
     * @ORM\Column(name="pr3_aith", type="string", length=50, nullable=true)
     */
    private $pr3Aith;

    /**
     * @var string
     *
     * @ORM\Column(name="pr3_apost", type="string", length=20, nullable=true)
     */
    private $pr3Apost;

    /**
     * @var string
     *
     * @ORM\Column(name="DEL_DATE", type="string", length=50, nullable=true)
     */
    private $delDate;

    /**
     * @var string
     *
     * @ORM\Column(name="DEL_PERSON", type="string", length=50, nullable=true)
     */
    private $delPerson;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LAST_UPDATE", type="datetime", nullable=true)
     */
    private $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="LAST_LOGIN", type="string", length=30, nullable=true)
     */
    private $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="Data", type="text", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="Parathrhseis", type="text", nullable=true)
     */
    private $parathrhseis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="XRHM02", type="boolean", nullable=true)
     */
    private $xrhm02;

    /**
     * @var boolean
     *
     * @ORM\Column(name="XRHM05", type="boolean", nullable=true)
     */
    private $xrhm05;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EDUNET1", type="boolean", nullable=true)
     */
    private $edunet1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EDUNET2", type="boolean", nullable=true)
     */
    private $edunet2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EDUNET_DIALUP", type="boolean", nullable=true)
     */
    private $edunetDialup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ATA", type="boolean", nullable=true)
     */
    private $ata;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ATA_DIALUP", type="boolean", nullable=true)
     */
    private $ataDialup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DORYFORIKA", type="boolean", nullable=true)
     */
    private $doryforika;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ASYRMATA", type="boolean", nullable=true)
     */
    private $asyrmata;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ADSL", type="boolean", nullable=true)
     */
    private $adsl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DIDE", type="boolean", nullable=true)
     */
    private $dide;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DHM02", type="boolean", nullable=true)
     */
    private $dhm02;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DHM02_R", type="boolean", nullable=true)
     */
    private $dhm02R;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P50A", type="boolean", nullable=true)
     */
    private $p50a;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P6", type="boolean", nullable=true)
     */
    private $p6;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P43", type="boolean", nullable=true)
     */
    private $p43;

    /**
     * @var string
     *
     * @ORM\Column(name="DHMOS_P43", type="string", length=50, nullable=true)
     */
    private $dhmosP43;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P93_F", type="boolean", nullable=true)
     */
    private $p93F;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P93_W", type="boolean", nullable=true)
     */
    private $p93W;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P93_U", type="boolean", nullable=true)
     */
    private $p93U;

    /**
     * @var string
     *
     * @ORM\Column(name="DHMOS_P93", type="string", length=30, nullable=true)
     */
    private $dhmosP93;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P105_PSD_A", type="boolean", nullable=true)
     */
    private $p105PsdA;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P105_PSD_W", type="boolean", nullable=true)
     */
    private $p105PsdW;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P105_OTA", type="boolean", nullable=true)
     */
    private $p105Ota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P105_TEDK", type="boolean", nullable=true)
     */
    private $p105Tedk;

    /**
     * @var string
     *
     * @ORM\Column(name="DHMOS_P105", type="string", length=30, nullable=true)
     */
    private $dhmosP105;

    /**
     * @var boolean
     *
     * @ORM\Column(name="P141", type="boolean", nullable=true)
     */
    private $p141;

    /**
     * @var string
     *
     * @ORM\Column(name="DHMOS_P141", type="string", length=30, nullable=true)
     */
    private $dhmosP141;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DKP", type="boolean", nullable=true)
     */
    private $dkp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EX424", type="boolean", nullable=true)
     */
    private $ex424;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ITY520", type="boolean", nullable=true)
     */
    private $ity520;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NOT800", type="boolean", nullable=true)
     */
    private $not800;

    /**
     * @var boolean
     *
     * @ORM\Column(name="KATARGHSH", type="boolean", nullable=true)
     */
    private $katarghsh;

    /**
     * @var string
     *
     * @ORM\Column(name="SYGXONEYSH_GLUC", type="string", length=20, nullable=true)
     */
    private $sygxoneyshGluc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LineInfo", type="boolean", nullable=true)
     */
    private $lineinfo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="StoixeiaProetInfo", type="boolean", nullable=true)
     */
    private $stoixeiaproetinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="PROET_DATE", type="string", length=20, nullable=true)
     */
    private $proetDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PARAD_DATE", type="datetime", nullable=true)
     */
    private $paradDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EGKAT_DATE", type="datetime", nullable=true)
     */
    private $egkatDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACTUAL_DATE", type="datetime", nullable=true)
     */
    private $actualDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEIT_DATE", type="datetime", nullable=true)
     */
    private $leitDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PARAL_DATE", type="datetime", nullable=true)
     */
    private $paralDate;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAT_AN", type="string", length=255, nullable=true)
     */
    private $paratAn;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAT_OTE", type="string", length=255, nullable=true)
     */
    private $paratOte;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAT_FY", type="text", nullable=true)
     */
    private $paratFy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FinDate", type="datetime", nullable=true)
     */
    private $findate;

    /**
     * @var string
     *
     * @ORM\Column(name="FinComment", type="text", nullable=true)
     */
    private $fincomment;

    /**
     * @var string
     *
     * @ORM\Column(name="APOFASH_IDRYSH", type="string", length=30, nullable=true)
     */
    private $apofashIdrysh;

    /**
     * @var string
     *
     * @ORM\Column(name="FEK_IDRYSH", type="string", length=30, nullable=true)
     */
    private $fekIdrysh;

    /**
     * @var string
     *
     * @ORM\Column(name="APOFASH_METONOMASIA", type="string", length=30, nullable=true)
     */
    private $apofashMetonomasia;

    /**
     * @var string
     *
     * @ORM\Column(name="FEK_METONOMASIA", type="string", length=50, nullable=true)
     */
    private $fekMetonomasia;

    /**
     * @var string
     *
     * @ORM\Column(name="APOFASH_KATARGHSH", type="string", length=30, nullable=true)
     */
    private $apofashKatarghsh;

    /**
     * @var string
     *
     * @ORM\Column(name="FEK_KATARGHSH", type="string", length=30, nullable=true)
     */
    private $fekKatarghsh;

    /**
     * @var string
     *
     * @ORM\Column(name="APOFASH_SYGXONEYSH", type="string", length=30, nullable=true)
     */
    private $apofashSygxoneysh;

    /**
     * @var string
     *
     * @ORM\Column(name="FEK_SYGXONEYSH", type="string", length=50, nullable=true)
     */
    private $fekSygxoneysh;

    /**
     * @var string
     *
     * @ORM\Column(name="LANG-EN", type="string", length=50, nullable=true)
     */
    private $langEn;


}
