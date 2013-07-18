<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfil
 *
 * @ORM\Table(name="perfil")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\PerfilRepository")
 */
class Perfil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idperfil", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_crea", type="datetime")
     */
    private $fecha_crea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modifica", type="datetime")
     */
    private $fecha_modifica;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=30)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="terminal", type="string", length=20)
     */
    private $terminal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TS", type="datetime")
     */
    private $TS;


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
     * @return Perfil
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }
    
     /**
    * @ORM\OneToMany(targetEntity="Usuario", mappedBy="Perfil")
    */
    protected $perfil;
    
    public function __construct()
    {
        $this->perfil = new \Doctrine\Common\Collections\ArrayCollection();
       
    }
    
    /**
     * Add perfil
     *
     * @param App\WebBundle\Entity\Usuario $perfil
     */
    public function addPerfil(\App\WebBundle\Entity\Usuario $perfil)
    {
        $this->perfil[] = $perfil;
    }
    
    /**
     * Get perfil
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }
    /**
    
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Perfil
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
     * Set estado
     *
     * @param string $estado
     * @return Perfil
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }
    
   
    
    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fecha_crea
     *
     * @param \DateTime $fechaCrea
     * @return Perfil
     */
    public function setFechaCrea($fechaCrea)
    {
        $this->fecha_crea = $fechaCrea;
    
        return $this;
    }

    /**
     * Get fecha_crea
     *
     * @return \DateTime 
     */
    public function getFechaCrea()
    {
        return $this->fecha_crea;
    }

    /**
     * Set fecha_modifica
     *
     * @param \DateTime $fechaModifica
     * @return Perfil
     */
    public function setFechaModifica($fechaModifica)
    {
        $this->fecha_modifica = $fechaModifica;
    
        return $this;
    }

    /**
     * Get fecha_modifica
     *
     * @return \DateTime 
     */
    public function getFechaModifica()
    {
        return $this->fecha_modifica;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Perfil
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set terminal
     *
     * @param string $terminal
     * @return Perfil
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;
    
        return $this;
    }

    /**
     * Get terminal
     *
     * @return string 
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Set TS
     *
     * @param \DateTime $tS
     * @return Perfil
     */
    public function setTS($tS)
    {
        $this->TS = $tS;
    
        return $this;
    }

    /**
     * Get TS
     *
     * @return \DateTime 
     */
    public function getTS()
    {
        return $this->TS;
    }
    
    
}
