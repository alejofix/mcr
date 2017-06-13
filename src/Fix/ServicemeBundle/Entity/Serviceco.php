<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serviceco
 *
 * @ORM\Table(name="TBL_SERVICECO_PRI_ALTOIMPACTO")
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\ServicecoRepository")
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
}

