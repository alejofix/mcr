<?php

namespace Fix\ServicemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Usuarios
 *
 * @ORM\Table(name="TBL_GENERAL_USUARIOS", indexes={
    * @ORM\Index(name="IDX_TBL_GENERAL_COLUMN_EMPRESA", columns={"EMPRESA"})
 })
 * @ORM\Entity(repositoryClass="Fix\ServicemeBundle\Repository\UsuariosRepository")
 * @UniqueEntity("usuario", message="¡Caracoles! ...Usuario ya existe")
 * @ORM\HasLifecycleCallbacks()
 */
class Usuarios implements UserInterface
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
     * @ORM\Column(name="USUARIO", type="string", length=50)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRES", type="string", length=100)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS", type="string", length=100)
     */
    private $apellidos;

    /**
     * @var bool
     *
     * @ORM\Column(name="GENERO", type="string", length=10)
     */
    private $genero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_NACIMIENTO", type="datetime", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO", type="string", length=100, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRASENA", type="string", length=255)
     */
    private $contrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCUMENTO_TIPO", type="string", length=25, nullable=true)
     */
    private $documentoTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCUMENTO_NUMERO", type="string", length=25, nullable=true)
     */
    private $documentoNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO_FIJO", type="string", length=25, nullable=true)
     */
    private $telefonoFijo;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO_MOVIL", type="string", length=25, nullable=true)
     */
    private $telefonoMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="CARGO", type="string", length=50, nullable=true)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="ROLE", type="string", columnDefinition="ENUM('ROLE_ROOT', 'ROLE_ADMIN', 'ROLE_MCR', 'ROLE_SD', 'ROLE_EXP', 'ROLE_INV')", length=50)
     */
    private $role;

    /**
     * @var bool
     *
     * @ORM\Column(name="ACTIVO", type="boolean")
     */
    private $activo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREADO", type="datetime")
     */
    private $fechaCreado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_ACTUALIZADO", type="datetime")
     */
    private $fechaActualizado;
    
    /**
     * @var Fix\ServicemeBundle\Entity\Empresas
     * 
     * @ORM\ManyToOne(targetEntity="Fix\ServicemeBundle\Entity\Empresas")
     * @ORM\JoinColumn(name="EMPRESA", referencedColumnName="ID")
     */
     private $empresa;

     public function getFullName() {
         return $this->nombres.' '.$this->apellidos;
     }
///////////////////////////////////
    /**
     * Usuarios::getPassword()
     * 
     */
    public function getPassword()
    {
     	return $this->contrasena;
    }
    /**
     * Usuarios::getUsername()
     * 
     */
    public function getUsername()
    {
     	return $this->usuario;
    }
    /**
     * Usuarios::getRoles()
     * 
     */
    public function getRoles()
    {
     	return array($this->role);
    }
    /**
     * Usuarios::getSalt()
     * 
     */
    public function getSalt()
    {
     	return null;
    }
    /**
     * Usuarios::eraseCredentials()
     * 
     */
    public function eraseCredentials()
    {
        
    }
    
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->usuario,
            $this->contrasena,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->usuario,
            $this->contrasena,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    
    
///////////////////////////////////

    /**
     * @ORM\PrePersist
     */
    public function setfechaCreadoValue()
    {
    	$this->activo = 1;
        $this->fechaCreado = new \DateTime();
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setfechaActualizadoValue()
    {
        $this->fechaActualizado = new \DateTime();
    }

///////////////////////////////////

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
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuarios
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Usuarios
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Usuarios
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set genero
     *
     * @param string $genero
     *
     * @return Usuarios
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    
        return $this;
    }

    /**
     * Get genero
     *
     * @return string
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Usuarios
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return Usuarios
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     *
     * @return Usuarios
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    
        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set documentoTipo
     *
     * @param string $documentoTipo
     *
     * @return Usuarios
     */
    public function setDocumentoTipo($documentoTipo)
    {
        $this->documentoTipo = $documentoTipo;
    
        return $this;
    }

    /**
     * Get documentoTipo
     *
     * @return string
     */
    public function getDocumentoTipo()
    {
        return $this->documentoTipo;
    }

    /**
     * Set documentoNumero
     *
     * @param string $documentoNumero
     *
     * @return Usuarios
     */
    public function setDocumentoNumero($documentoNumero)
    {
        $this->documentoNumero = $documentoNumero;
    
        return $this;
    }

    /**
     * Get documentoNumero
     *
     * @return string
     */
    public function getDocumentoNumero()
    {
        return $this->documentoNumero;
    }

    /**
     * Set telefonoFijo
     *
     * @param string $telefonoFijo
     *
     * @return Usuarios
     */
    public function setTelefonoFijo($telefonoFijo)
    {
        $this->telefonoFijo = $telefonoFijo;
    
        return $this;
    }

    /**
     * Get telefonoFijo
     *
     * @return string
     */
    public function getTelefonoFijo()
    {
        return $this->telefonoFijo;
    }

    /**
     * Set telefonoMovil
     *
     * @param string $telefonoMovil
     *
     * @return Usuarios
     */
    public function setTelefonoMovil($telefonoMovil)
    {
        $this->telefonoMovil = $telefonoMovil;
    
        return $this;
    }

    /**
     * Get telefonoMovil
     *
     * @return string
     */
    public function getTelefonoMovil()
    {
        return $this->telefonoMovil;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     *
     * @return Usuarios
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Usuarios
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Usuarios
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    
        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set fechaCreado
     *
     * @param \DateTime $fechaCreado
     *
     * @return Usuarios
     */
    public function setFechaCreado($fechaCreado)
    {
        $this->fechaCreado = $fechaCreado;
    
        return $this;
    }

    /**
     * Get fechaCreado
     *
     * @return \DateTime
     */
    public function getFechaCreado()
    {
        return $this->fechaCreado;
    }

    /**
     * Set fechaActualizado
     *
     * @param \DateTime $fechaActualizado
     *
     * @return Usuarios
     */
    public function setFechaActualizado($fechaActualizado)
    {
        $this->fechaActualizado = $fechaActualizado;
    
        return $this;
    }

    /**
     * Get fechaActualizado
     *
     * @return \DateTime
     */
    public function getFechaActualizado()
    {
        return $this->fechaActualizado;
    }

    /**
     * Set empresa
     *
     * @param \Fix\ServicemeBundle\Entity\Empresas $empresa
     *
     * @return Usuarios
     */
    public function setEmpresa(\Fix\ServicemeBundle\Entity\Empresas $empresa = null)
    {
        $this->empresa = $empresa;
    
        return $this;
    }

    /**
     * Get empresa
     *
     * @return \Fix\ServicemeBundle\Entity\Empresas
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
}
