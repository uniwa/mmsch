<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SystemMailRules
 *
 * @ORM\Table(name="system_mail_rules")
 * @ORM\Entity
 */
class SystemMailRules
{
    /**
     * @var integer
     *
     * @ORM\Column(name="system_mail_rule_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $systemMailRuleId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="mailto", type="string", length=255, nullable=true)
     */
    private $mailto;

    /**
     * @var string
     *
     * @ORM\Column(name="mailcc", type="string", length=255, nullable=true)
     */
    private $mailcc;

    /**
     * @var string
     *
     * @ORM\Column(name="mailfrom", type="string", length=255, nullable=true)
     */
    private $mailfrom;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;


}
