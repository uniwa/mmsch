<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ExtLogEntries
 *
 * @ORM\Table(name="ext_log_entries", indexes={@ORM\Index(name="log_class_lookup_idx", columns={"object_class"}), @ORM\Index(name="log_date_lookup_idx", columns={"logged_at"}), @ORM\Index(name="log_user_lookup_idx", columns={"username"}), @ORM\Index(name="log_version_lookup_idx", columns={"object_id","object_class","version"}) })
 * @ORM\Entity
 */
class ExtLogEntries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=8, nullable=true)
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="logged_at", type="datetime", nullable=true)
     */
    private $loggedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="object_id", type="string", length=64, nullable=true)
     */
    private $objectId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="object_class", type="string", length=255, nullable=true)
     */
    private $objectClass;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", nullable=true)
     */
    private $version;

    /**
     * @var text
     *
     * @ORM\Column(name="data", type="text", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=100, nullable=true)
     */
    private $ip;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAction() {
        return $this->action;
    }

    public function setAction($action) {
        $this->action = $action;
    }

    public function getLoggedAt() {
        return $this->loggedAt;
    }

    public function setLoggedAt(\DateTime $loggedAt) {
        $this->loggedAt = $loggedAt;
    }

    public function getObjectId() {
        return $this->objectId;
    }

    public function setObjectId($objectId) {
        $this->objectId = $objectId;
    }

    public function getObjectClass() {
        return $this->objectClass;
    }

    public function setObjectClass($objectClass) {
        $this->objectClass = $objectClass;
    }

    public function getVersion() {
        return $this->version;
    }

    public function setVersion($version) {
        $this->version = $version;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getIp() {
        return $this->ip;
    }

    public function setIp($ip) {
        $this->ip = $ip;
    }
}
