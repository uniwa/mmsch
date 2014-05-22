<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SystemSyncLogs
 *
 * @ORM\Table(name="system_sync_logs")
 * @ORM\Entity
 */
class SystemSyncLogs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="system_sync_log_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $systemSyncLogId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="records", type="integer", nullable=true)
     */
    private $records;

    /**
     * @var integer
     *
     * @ORM\Column(name="installed", type="integer", nullable=true)
     */
    private $installed;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated", type="integer", nullable=true)
     */
    private $updated;

    /**
     * @var integer
     *
     * @ORM\Column(name="skipped", type="integer", nullable=true)
     */
    private $skipped;

    /**
     * @var integer
     *
     * @ORM\Column(name="errors", type="integer", nullable=true)
     */
    private $errors;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="time", nullable=true)
     */
    private $startTime;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255, nullable=true)
     */
    private $time;


}
