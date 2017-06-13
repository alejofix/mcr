<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * servicecolog
 *
 * @ORM\Table(name="TBL_SERVICECO_LOG_ALTOIMPACTO", indexes={
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_USUARIO", columns={"USUARIO"}),
    * @ORM\Index(name="IDX_TBL_SERVICECO_COLUMN_ALTOIMPACTO", columns={"ALTOIMPACTO"})
    })
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\servicecologRepository")
 */
class servicecolog
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
     * @ORM\Column(name="EVENTO", type="string", length=50)
     */
    private $evento;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text")
     */
    private $descripcion;

    /**
     * @var Fix\ServicemeBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Usuarios")
     * @ORM\JoinColumn(name="USUARIO", referencedColumnName="ID")
     */
    private $usuario;

    /**
     * @var Fix\ServicemeBundle\Entity\Serviceco
     *
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Serviceco")
     * @ORM\JoinColumn(name="ALTOIMPACTO", referencedColumnName="ID")
     */
    private $altoimpacto;


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
     * @return servicecolog
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
     * Set evento
     *
     * @param string $evento
     *
     * @return servicecolog
     */
    public function setEvento($evento)
    {
        $this->evento = $evento;

        return $this;
    }

    /**
     * Get evento
     *
     * @return string
     */
    public function getEvento()
    {
        return $this->evento;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return servicecolog
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set usuario
     *
     * @param \Fix\ServicemeBundle\Entity\Usuarios $usuario
     *
     * @return servicecolog
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
     * Set altoimpacto
     *
     * @param \Fix\ServicemeBundle\Entity\Serviceco $altoimpacto
     *
     * @return servicecolog
     */
    public function setAltoimpacto(\Fix\ServicemeBundle\Entity\Serviceco $altoimpacto = null)
    {
        $this->altoimpacto = $altoimpacto;
    
        return $this;
    }

    /**
     * Get altoimpacto
     *
     * @return \Fix\ServicemeBundle\Entity\Serviceco
     */
    public function getAltoimpacto()
    {
        return $this->altoimpacto;
    }
}
