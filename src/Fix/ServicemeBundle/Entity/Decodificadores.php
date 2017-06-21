<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Decodificadores
 *
 * @ORM\Table(name="TBL_GENERAL_DECODIFICADORES", indexes={
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_ESTADO", columns={"ESTADO"})
    })
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\DecodificadoresRepository")
 */
class Decodificadores
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
     * @ORM\Column(name="PLATAFORMA", type="string", length=50)
     */
    private $plataforma;

    /**
     * @var string
     *
     * @ORM\Column(name="MARCA", type="string", length=100)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="MODELO", type="string", length=100)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="REFERENCIA", type="string", length=50)
     */
    private $referencia;

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
     * Set plataforma
     *
     * @param string $plataforma
     *
     * @return Decodificadores
     */
    public function setPlataforma($plataforma)
    {
        $this->plataforma = $plataforma;
    
        return $this;
    }

    /**
     * Get plataforma
     *
     * @return string
     */
    public function getPlataforma()
    {
        return $this->plataforma;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return Decodificadores
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Decodificadores
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     *
     * @return Decodificadores
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
     * Set estado
     *
     * @param \Fix\ServicemeBundle\Entity\Estados $estado
     *
     * @return Decodificadores
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
