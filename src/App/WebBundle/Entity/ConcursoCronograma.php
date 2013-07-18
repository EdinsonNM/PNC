<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\WebBundle\Entity\Concurso;
use App\WebBundle\Entity\EtapaEvaluacion;
use App\WebBundle\Entity\Responsable;

/**
 * ConcursoCronograma
 *
 * @ORM\Table(name="concurso_cronograma")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\ConcursoCronogramaRepository")
 */
class ConcursoCronograma
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idetapa", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_etapa", type="string", length=250)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date")
     */
    private $fechaini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date")
     */
    private $fechafin;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ampliacion", type="date")
     */
    private $fechaamplia;

    /**
    * @ORM\ManyToOne(targetEntity="Concurso", inversedBy="cronogramas")
    * @ORM\JoinColumn(name="idconcurso", referencedColumnName="idconcurso")
    */
    protected $concurso;
    
    /**
    * @ORM\ManyToOne(targetEntity="EtapaEvaluacion", inversedBy="etapaevaluacion")
    * @ORM\JoinColumn(name="idetapa_evaluacion", referencedColumnName="idetapa")
    */
    protected $etapaevaluacion;
    
     /**
    * @ORM\ManyToOne(targetEntity="Responsable", inversedBy="responsable")
    * @ORM\JoinColumn(name="idresponsable", referencedColumnName="idresponsable")
    */
    protected $responsable;
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
     * @return ConcursoCronograma
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
     * Set fechaini
     *
     * @param \DateTime $fechaini
     * @return ConcursoCronograma
     */
    public function setFechaini($fechaini)
    {
        $this->fechaini = $fechaini;
    
        return $this;
    }

    /**
     * Get fechaini
     *
     * @return \DateTime 
     */
    public function getFechaini()
    {
        return $this->fechaini;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return ConcursoCronograma
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;
    
        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set fechacrea
     *
     * @param \DateTime $fechacrea
     * @return ConcursoCronograma
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
     * @return ConcursoCronograma
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
     * @return ConcursoCronograma
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
     * @return ConcursoCronograma
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
     * @return ConcursoCronograma
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
     * Set fechaamplia
     *
     * @param \DateTime $fechaamplia
     * @return ConcursoCronograma
     */
    public function setFechaamplia($fechaamplia)
    {
        $this->fechaamplia = $fechaamplia;
    
        return $this;
    }

    /**
     * Get fechaamplia
     *
     * @return \DateTime 
     */
    public function getFechaamplia()
    {
        return $this->fechaamplia;
    }
    
     /**
     * Set concurso
     *
     * @param App\WebBundle\Entity\Concurso $concurso
     */
    public function setConcurso(\App\WebBundle\Entity\Concurso $concurso)
    {
        $this->concurso = $concurso;
    }
     /**
     * Get concurso
     *
     * @return App\WebBundle\Entity\Concurso 
     */
    public function getConcurso()
    {
        return $this->concurso;
    }
    /**
     * Set etapaevaluacion
     *
     * @param App\WebBundle\Entity\EtapaEvaluacion $etapaevaluacion
     */
    public function setEtapaEvaluacion(\App\WebBundle\Entity\EtapaEvaluacion $etapaevaluacion)
    {
        $this->etapaevaluacion = $etapaevaluacion;
    }
     /**
     * Get EtapaEvaluacion
     *
     * @return App\WebBundle\Entity\EtapaEvaluacion
     */
    public function getEtapaEvaluacion()
    {
        return $this->etapaevaluacion;
    }
    /**
     * Set responsable
     *
     * @param App\WebBundle\Entity\Responsable $responsable
     */
    public function setResponsable(\App\WebBundle\Entity\Responsable $responsable)
    {
        $this->responsable = $responsable;
    }
     /**
     * Get Responsable
     *
     * @return App\WebBundle\Entity\Responsable
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
}
