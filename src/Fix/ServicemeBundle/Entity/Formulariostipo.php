<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulariostipo
 *
 * @ORM\Table(name="TBL_FORMULARIOS_SEC_TIPO", indexes={
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_ESTADO", columns={"ESTADO"}),
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_SERVICIO", columns={"SERVICIO"}),
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_USUARIO", columns={"USUARIO"})
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
     * @var Fix\ServicemeBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Usuarios")
     * @ORM\JoinColumn(name="USUARIO", referencedColumnName="ID")
     */
    private $usuario;
    
    
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

    /**
     * Set estado
     *
     * @param \Fix\ServicemeBundle\Entity\Estados $estado
     *
     * @return Formulariostipo
     */
    public function setEstado(\Fix\ServicemeBundle\Entity\Estados $estado = null)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return \Fix\ServicemeBundle\Entity\Estados
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set servicio
     *
     * @param \Fix\ServicemeBundle\Entity\Servicios $servicio
     *
     * @return Formulariostipo
     */
    public function setServicio(\Fix\ServicemeBundle\Entity\Servicios $servicio = null)
    {
        $this->servicio = $servicio;
    
        return $this;
    }

    /**
     * Get servicio
     *
     * @return \Fix\ServicemeBundle\Entity\Servicios
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set usuario
     *
     * @param \Fix\ServicemeBundle\Entity\Usuarios $usuario
     *
     * @return Formulariostipo
     */
    public function setUsuario(\Fix\ServicemeBundle\Entity\Usuarios $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Fix\ServicemeBundle\Entity\Usuarios
     */
    public function getUsuario()
    {
        return $this->usuario;
    }


}
