<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SelectFields
 *
 * @ORM\Table(name="TBL_GENERAL_SELECT", indexes={
 *     @ORM\Index(name="IDX_TBL_FIELDS_GENERAL_COLUMN_TYPE", columns={"TYPE"})
 * })
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\SelectFieldsRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class SelectFields
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="RESOURCE", type="string", length=255)
     */
    private $resource;

    /**
     * @var string
     *
     * @ORM\Column(name="FIELD", type="string", length=255)
     */
    private $field;

    /**
     * @var \Fix\ServicemeBundle\Entity\Formulariostipo
     *
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Formulariostipo")
     * @ORM\JoinColumn(name="TYPE", referencedColumnName="ID")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="IS_ACTIVE", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\PrePersist()
     */
    public function setPrePersistData() {

        $this->isActive = true;
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
     * Set field
     *
     * @param string $field
     *
     * @return SelectFields
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SelectFields
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return SelectFields
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
     * Set type
     *
     * @param \Fix\ServicemeBundle\Entity\Formulariostipo $type
     *
     * @return SelectFields
     */
    public function setType(\Fix\ServicemeBundle\Entity\Formulariostipo $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Fix\ServicemeBundle\Entity\Formulariostipo
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set resource
     *
     * @param string $resource
     *
     * @return SelectFields
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    
        return $this;
    }

    /**
     * Get resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }
}