<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulariosrazon
 *
 * @ORM\Table(name="TBL_FORMULARIOS_SElECT_RAZON", indexes={
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_ESTADO", columns={"ESTADO"}),
    * @ORM\Index(name="IDX_TBL_FORMULARIOS_COLUMN_TIPO", columns={"TIPO"})
 })
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\FormulariosrazonRepository")
 */
class Formulariosrazon
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
     * @var Fix\ServicemeBundle\Entity\Formulariostipo
     * 
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Formulariostipo")
     * @ORM\JoinColumn(name="TIPO", referencedColumnName="ID")
     */
     private $tipo;


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
     * @return Formulariosrazon
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
     * @return Formulariosrazon
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
     * Set tipo
     *
     * @param \Fix\ServicemeBundle\Entity\Formulariostipo $tipo
     *
     * @return Formulariosrazon
     */
    public function setTipo(\Fix\ServicemeBundle\Entity\Formulariostipo $tipo = null)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return \Fix\ServicemeBundle\Entity\Formulariostipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
