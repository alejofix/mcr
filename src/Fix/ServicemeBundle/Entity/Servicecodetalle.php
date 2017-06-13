<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicecodetalle
 *
 * @ORM\Table(name="TBL_SERVICECO_SELECT_DETALLE", indexes={
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_ESTADO", columns={"ESTADO"})
    })
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\ServicecodetalleRepository")
 */
class Servicecodetalle
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
     * @ORM\Column(name="NOMBRE", type="string", length=255)
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
     * Get id
     *
     * @return integer
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
     * @return Servicecodetalle
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
     * @return Servicecodetalle
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
}
