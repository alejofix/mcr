<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulariostipo
 *
 * @ORM\Table(name="TBL_FORMULARIOS_SEC_TIPO", indexes={
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_ESTADO", columns={"ESTADO"}),
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_SERVICIO", columns={"SERVICIO"})
 })
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\FormulariostipoRepository")
 */
class Formulariostipo
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
     * @ORM\Column(name="NOMBRE", type="string", length=100)
     */
    private $nombre;
    
    /**
     * @var Fix\ServicemeBundle\Entity\Estados
     * 
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Estados")
     * @ORM\JoinColumn(name="ESTADO", referencedColumnName="ID")
     */
     private $estado;
     
    /**
     * @var Fix\ServicemeBundle\Entity\Servicios
     * 
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Servicios")
     * @ORM\JoinColumn(name="SERVICIO", referencedColumnName="ID")
     */
     private $servicio;
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Formulariostipo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}

