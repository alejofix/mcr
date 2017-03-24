<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formularios
 *
 * @ORM\Table(name="TBL_FORMULARIOS_PRI_MOTIVO", indexes={
    * @ORM\Index(name="IDX_TBL_FORMULARIOS_COLUMN_TIPO", columns={"TIPO"}),
    * @ORM\Index(name="IDX_TBL_FORMULARIOS_COLUMN_RAZON", columns={"RAZON"})
 })
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\FormulariosRepository")
 */
class Formularios
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
     * @ORM\Column(name="CUENTA", type="string", length=50)
     */
    private $cuenta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="REFERENCIA", type="string", length=255, nullable=true)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="DETALLE", type="string", length=255, nullable=true)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="INFORMACIONUNO", type="text", nullable=true)
     */
    private $informacionuno;

    /**
     * @var string
     *
     * @ORM\Column(name="INFORMACIONDOS", type="text", nullable=true)
     */
    private $informaciondos;

    /**
     * @var string
     *
     * @ORM\Column(name="INFORMACIONTRES", type="text", nullable=true)
     */
    private $informaciontres;

    /**
     * @var string
     *
     * @ORM\Column(name="DATOS", type="text", nullable=true)
     */
    private $datos;
    
    /**
     * @var Fix\ServicemeBundle\Entity\Formulariostipo
     * 
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Formulariostipo")
     * @ORM\JoinColumn(name="TIPO", referencedColumnName="ID")
     */
     private $tipo;
     
    /**
     * @var Fix\ServicemeBundle\Entity\Formulariosrazon
     * 
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Formulariosrazon")
     * @ORM\JoinColumn(name="RAZON", referencedColumnName="ID")
     */
     private $razon;
    
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
     * Set cuenta
     *
     * @param string $cuenta
     *
     * @return Formularios
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Formularios
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     *
     * @return Formularios
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     *
     * @return Formularios
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set informacionuno
     *
     * @param string $informacionuno
     *
     * @return Formularios
     */
    public function setInformacionuno($informacionuno)
    {
        $this->informacionuno = $informacionuno;

        return $this;
    }

    /**
     * Get informacionuno
     *
     * @return string
     */
    public function getInformacionuno()
    {
        return $this->informacionuno;
    }

    /**
     * Set informaciondos
     *
     * @param string $informaciondos
     *
     * @return Formularios
     */
    public function setInformaciondos($informaciondos)
    {
        $this->informaciondos = $informaciondos;

        return $this;
    }

    /**
     * Get informaciondos
     *
     * @return string
     */
    public function getInformaciondos()
    {
        return $this->informaciondos;
    }

    /**
     * Set informaciontres
     *
     * @param string $informaciontres
     *
     * @return Formularios
     */
    public function setInformaciontres($informaciontres)
    {
        $this->informaciontres = $informaciontres;

        return $this;
    }

    /**
     * Get informaciontres
     *
     * @return string
     */
    public function getInformaciontres()
    {
        return $this->informaciontres;
    }

    /**
     * Set datos
     *
     * @param string $datos
     *
     * @return Formularios
     */
    public function setDatos($datos)
    {
        $this->datos = $datos;

        return $this;
    }

    /**
     * Get datos
     *
     * @return string
     */
    public function getDatos()
    {
        return $this->datos;
    }
}

