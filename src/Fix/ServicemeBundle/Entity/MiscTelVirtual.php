<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MiscTelVirtual
 *
 * @ORM\Table(name="TBL_MISCELANEOS_TELEFONIA_VIRTUAL")
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\MiscTelVirtualRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class MiscTelVirtual
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CUENTA", type="string", length=255)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="string", length=255)
     */
    private $phone;

    /**
     * @var bool
     *
     * @ORM\Column(name="ACTIVO", type="boolean")
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREACION_AT", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACTUALIZADO_AT", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\PrePersist()
     */
    public function setPrePersistData() {
        $this->isActive = true;
        $this->createdAt = new \DateTime();
    }

    /**
     * @ORM\PreUpdate()
     */
    public function setPreUpdateData() {
        $this->updatedAt = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set account
     *
     * @param string $account
     *
     * @return MiscTelVirtual
     */
    public function setAccount($account)
    {
        $this->account = $account;
    
        return $this;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return MiscTelVirtual
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return MiscTelVirtual
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return MiscTelVirtual
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return MiscTelVirtual
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}