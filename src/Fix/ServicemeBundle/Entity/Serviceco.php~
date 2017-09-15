<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serviceco
 *
 * @ORM\Table(name="TBL_SERVICECO_PRI_ALTOIMPACTO", indexes={
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_ESTADO", columns={"ESTADO"}),
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_USUARIO", columns={"USUARIO"}),
    * @ORM\Index(name="IDX_TBL_SERVICECO_COLUMN_REFERENCIA", columns={"REFERENCIA"}),
    * @ORM\Index(name="IDX_TBL_SERVICECO_COLUMN_DETALLE", columns={"DETALLE"})
    })
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\ServicecoRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Serviceco
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
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="AVISO", type="string", length=50)
     */
    private $aviso;

    /**
     * @var string
     *
     * @ORM\Column(name="SINTOMA", type="string", length=255)
     */
    private $sintoma;

    /**
     * @var string
     *
     * @ORM\Column(name="AFECTACION", type="string", length=255)
     */
    private $afectacion;

    /**
     * @var Fix\ServicemeBundle\Entity\Estados
     *
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Estados")
     * @ORM\JoinColumn(name="ESTADO", referencedColumnName="ID")
     */
    private $estado;

    /**
     * @var Fix\ServicemeBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Usuarios")
     * @ORM\JoinColumn(name="USUARIO", referencedColumnName="ID")
     */
    private $usuario;

    /**
     * @var Fix\ServicemeBundle\Entity\Servicecoreferencia
     *
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Servicecoreferencia")
     * @ORM\JoinColumn(name="REFERENCIA", referencedColumnName="ID")
     */
    private $referencia;

    /**
     * @var Fix\ServicemeBundle\Entity\Servicecodetalle
     *
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Servicecodetalle")
     * @ORM\JoinColumn(name="DETALLE", referencedColumnName="ID")
     */
    private $detalle;

    /**
     * @ORM\PrePersist()
     */
    public function setPrePersistData() {
        $this->fecha = new \DateTime();
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Serviceco
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
     * Set aviso
     *
     * @param string $aviso
     *
     * @return Serviceco
     */
    public function setAviso($aviso)
    {
        $this->aviso = $aviso;
    
        return $this;
    }

    /**
     * Get aviso
     *
     * @return string
     */
    public function getAviso()
    {
        return $this->aviso;
    }

    /**
     * Set sintoma
     *
     * @param string $sintoma
     *
     * @return Serviceco
     */
    public function setSintoma($sintoma)
    {
        $this->sintoma = $sintoma;
    
        return $this;
    }

    /**
     * Get sintoma
     *
     * @return string
     */
    public function getSintoma()
    {
        return $this->sintoma;
    }

    /**
     * Set afectacion
     *
     * @param string $afectacion
     *
     * @return Serviceco
     */
    public function setAfectacion($afectacion)
    {
        $this->afectacion = $afectacion;
    
        return $this;
    }

    /**
     * Get afectacion
     *
     * @return string
     */
    public function getAfectacion()
    {
        return $this->afectacion;
    }

    /**
     * Set estado
     *
     * @param \Fix\ServicemeBundle\Entity\Estados $estado
     *
     * @return Serviceco
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
     * Set usuario
     *
     * @param \Fix\ServicemeBundle\Entity\Usuarios $usuario
     *
     * @return Serviceco
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

    /**
     * Set referencia
     *
     * @param \Fix\ServicemeBundle\Entity\Servicecoreferencia $referencia
     *
     * @return Serviceco
     */
    public function setReferencia(\Fix\ServicemeBundle\Entity\Servicecoreferencia $referencia = null)
    {
        $this->referencia = $referencia;
    
        return $this;
    }

    /**
     * Get referencia
     *
     * @return \Fix\ServicemeBundle\Entity\Servicecoreferencia
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set detalle
     *
     * @param \Fix\ServicemeBundle\Entity\Servicecodetalle $detalle
     *
     * @return Serviceco
     */
    public function setDetalle(\Fix\ServicemeBundle\Entity\Servicecodetalle $detalle = null)
    {
        $this->detalle = $detalle;
    
        return $this;
    }

    /**
     * Get detalle
     *
     * @return \Fix\ServicemeBundle\Entity\Servicecodetalle
     */
    public function getDetalle()
    {
        return $this->detalle;
    }
}
