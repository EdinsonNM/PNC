<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\WebBundle\Entity\Perfil;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\UsuarioRepository")
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codusuario", type="string", length=10)
     */
    private $codusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrecorto", type="string", length=50)
     */
    private $nombrecorto;

    /**
     * @var string
     *
     * @ORM\Column(name="loguin", type="string", length=30)
     */
    private $loguin;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="modo_acceso", type="string", length=1)
     */
    private $modoaceso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="date")
     */
    private $fecharegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultimo_acceso", type="datetime")
     */
    private $ultimoacceso;

    /**
     * @var string
     *
     * @ORM\Column(name="cambia_password", type="string", length=20)
     */
    private $cambiapass;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_documento", type="string", length=1)
     */
    private $tipodocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_documento", type="string", length=20)
     */
    private $nrodocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=100)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=100)
     */
    private $apellidos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_crea", type="datetime")
     */
    private $fechacrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modifica", type="datetime")
     */
    private $fechamodifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="terminal", type="string", length=50)
     */
    private $terminal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TS", type="datetime")
     */
    private $TS;

    /**
    * @ORM\ManyToOne(targetEntity="Perfil", inversedBy="perfil")
    * @ORM\JoinColumn(name="idperfil", referencedColumnName="idperfil")
    */
    protected $perfil;
    
    
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
     * Set codusuario
     *
     * @param string $codusuario
     * @return Usuario
     */
    public function setCodusuario($codusuario)
    {
        $this->codusuario = $codusuario;
    
        return $this;
    }

    /**
     * Get codusuario
     *
     * @return string 
     */
    public function getCodusuario()
    {
        return $this->codusuario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * Set nombrecorto
     *
     * @param string $nombrecorto
     * @return Usuario
     */
    public function setNombrecorto($nombrecorto)
    {
        $this->nombrecorto = $nombrecorto;
    
        return $this;
    }

    /**
     * Get nombrecorto
     *
     * @return string 
     */
    public function getNombrecorto()
    {
        return $this->nombrecorto;
    }

    /**
     * Set loguin
     *
     * @param string $loguin
     * @return Usuario
     */
    public function setLoguin($loguin)
    {
        $this->loguin = $loguin;
    
        return $this;
    }

    /**
     * Get loguin
     *
     * @return string 
     */
    public function getLoguin()
    {
        return $this->loguin;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Usuario
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
     * Set modoaceso
     *
     * @param string $modoaceso
     * @return Usuario
     */
    public function setModoaceso($modoaceso)
    {
        $this->modoaceso = $modoaceso;
    
        return $this;
    }

    /**
     * Get modoaceso
     *
     * @return string 
     */
    public function getModoaceso()
    {
        return $this->modoaceso;
    }

    /**
     * Set fecharegistro
     *
     * @param \DateTime $fecharegistro
     * @return Usuario
     */
    public function setFecharegistro($fecharegistro)
    {
        $this->fecharegistro = $fecharegistro;
    
        return $this;
    }

    /**
     * Get fecharegistro
     *
     * @return \DateTime 
     */
    public function getFecharegistro()
    {
        return $this->fecharegistro;
    }

    /**
     * Set ultimoacceso
     *
     * @param \DateTime $ultimoacceso
     * @return Usuario
     */
    public function setUltimoacceso($ultimoacceso)
    {
        $this->ultimoacceso = $ultimoacceso;
    
        return $this;
    }

    /**
     * Get ultimoacceso
     *
     * @return \DateTime 
     */
    public function getUltimoacceso()
    {
        return $this->ultimoacceso;
    }

    /**
     * Set cambiapass
     *
     * @param string $cambiapass
     * @return Usuario
     */
    public function setCambiapass($cambiapass)
    {
        $this->cambiapass = $cambiapass;
    
        return $this;
    }

    /**
     * Get cambiapass
     *
     * @return string 
     */
    public function getCambiapass()
    {
        return $this->cambiapass;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tipodocumento
     *
     * @param string $tipodocumento
     * @return Usuario
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;
    
        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return string 
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /**
     * Set nrodocumento
     *
     * @param string $nrodocumento
     * @return Usuario
     */
    public function setNrodocumento($nrodocumento)
    {
        $this->nrodocumento = $nrodocumento;
    
        return $this;
    }

    /**
     * Get nrodocumento
     *
     * @return string 
     */
    public function getNrodocumento()
    {
        return $this->nrodocumento;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Usuario
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
     * @return Usuario
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
     * Set fechacrea
     *
     * @param \DateTime $fechacrea
     * @return Usuario
     */
    public function setFechacrea($fechacrea)
    {
        $this->fechacrea = $fechacrea;
    
        return $this;
    }

    /**
     * Get fechacrea
     *
     * @return \DateTime 
     */
    public function getFechacrea()
    {
        return $this->fechacrea;
    }

    /**
     * Set fechamodifica
     *
     * @param \DateTime $fechamodifica
     * @return Usuario
     */
    public function setFechamodifica($fechamodifica)
    {
        $this->fechamodifica = $fechamodifica;
    
        return $this;
    }

    /**
     * Get fechamodifica
     *
     * @return \DateTime 
     */
    public function getFechamodifica()
    {
        return $this->fechamodifica;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return Usuario
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set terminal
     *
     * @param string $terminal
     * @return Usuario
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
     * @return Usuario
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
    
    /**
     * Set perfil
     *
     * @param App\WebBundle\Entity\Perfil $perfil
     */
    public function setPerfil(\App\WebBundle\Entity\Perfil $perfil)
    {
        $this->perfil = $perfil;
    }
     /**
     * Get perfil
     *
     * @return App\WebBundle\Entity\Perfil 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }
    
     /**
    * @ORM\OneToMany(targetEntity="Evaluador", mappedBy="Usuario")
    */
    protected $usuario;
    
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
       
    }
    
    /**
     * Add usuario
     *
     * @param App\WebBundle\Entity\Evaluador $usuario
     */
    public function addUsuario(\App\WebBundle\Entity\Evaluador $usuario)
    {
        $this->usuario[] = $usuario;
    }
    
    /**
     * Get usuario
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

}
