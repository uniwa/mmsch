<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SystemSyncScripts
 *
 * @ORM\Table(name="system_sync_scripts")
 * @ORM\Entity
 */
class SystemSyncScripts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="system_sync_script_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $systemSyncScriptId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="script", type="string", length=255, nullable=true)
     */
    private $script;

    /**
     * @var integer
     *
     * @ORM\Column(name="time_loop", type="integer", nullable=true)
     */
    private $timeLoop;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_date_check", type="date", nullable=true)
     */
    private $lastDateCheck;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_time_check", type="time", nullable=true)
     */
    private $lastTimeCheck;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;


}
