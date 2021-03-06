<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concurso
 *
 * @ORM\Table(name="concurso")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\ConcursoRepository")
 */
class Concurso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idconcurso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreconcurso", type="string", length=30)
     */
    private $nombre;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechainicio", type="date")
     */
    private $fechaini;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechafin", type="date")
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="presentacion", type="text")
     */
    private $presentacion;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivos", type="string", length=200)
     */
    private $objetivos;

    /**
     * @var string
     *
     * @ORM\Column(name="requisitos", type="string", length=200)
     */
    private $requisitos;

    /**
     * @var string
     *
     * @ORM\Column(name="participantes", type="string", length=200)
     */
    private $participantes;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficios", type="string", length=200)
     */
    private $beneficios;

    /**
     * @var string
     *
     * @ORM\Column(name="categorias", type="string", length=200)
     */
    private $categorias;

    /**
     * @var string
     *
     * @ORM\Column(name="premiootorgar", type="string", length=200)
     */
    private $premiootorgar;

    /**
     * @var string
     *
     * @ORM\Column(name="medallas", type="string", length=200)
     */
    private $medallas;

    /**
     * @var string
     *
     * @ORM\Column(name="cuotaparticipacion", type="string", length=200)
     */
    private $cuota;

    /**
     * @var string
     *
     * @ORM\Column(name="infocomplementaria", type="string", length=200)
     */
    private $informacion;

    /**
     * @var float
     *
     * @ORM\Column(name="anio", type="decimal")
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_empresa", type="string", length=1)
     */
    private $estadoemp;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_proyecto", type="string", length=1)
     */
    private $estadopy;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="termino_aceptacion", type="text")
     */
    private $terminoacepta;

    /**
     * @var integer
     *
     * @ORM\Column(name="inc_puntaje", type="integer")
     */
    private $incpuntaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="evalua_criterio", type="integer")
     */
    private $evaluacriterio;

    /**
     * @var string
     *
     * @ORM\Column(name="informe_retro", type="text")
     */
    private $informeretro;

    /**
     * @var string
     *
     * @ORM\Column(name="calificacion", type="text")
     */
    private $calificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="prefijo", type="string", length=30)
     */
    private $prefijo;

    /**
    * @ORM\OneToMany(targetEntity="ConcursoCronograma", mappedBy="Concurso")
    */
    protected $cronogramas;
    
    public function __construct()
    {
        $this->cronogramas = new \Doctrine\Common\Collections\ArrayCollection();
       
    }
    
    /**
     * Add cronogramas
     *
     * @param App\WebBundle\Entity\ConcursoCronograma $cronogramas
     */
    public function addCronogramas(\App\WebBundle\Entity\ConcursoCronograma $cronogramas)
    {
        $this->cronogramas[] = $cronogramas;
    }
    
    /**
     * Get cronogramas
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCronogramas()
    {
        return $this->cronogramas;
    }
    
    /**
     * Get id
     *
     * @return integer 
     * 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Concurso
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
     * @return Concurso
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
     * @return Concurso
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
     * Set presentacion
     *
     * @param string $presentacion
     * @return Concurso
     */
    public function setPresentacion($presentacion)
    {
        $this->presentacion = $presentacion;
    
        return $this;
    }

    /**
     * Get presentacion
     *
     * @return string 
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /**
     * Set objetivos
     *
     * @param string $objetivos
     * @return Concurso
     */
    public function setObjetivos($objetivos)
    {
        $this->objetivos = $objetivos;
    
        return $this;
    }

    /**
     * Get objetivos
     *
     * @return string 
     */
    public function getObjetivos()
    {
        return $this->objetivos;
    }

    /**
     * Set requisitos
     *
     * @param string $requisitos
     * @return Concurso
     */
    public function setRequisitos($requisitos)
    {
        $this->requisitos = $requisitos;
    
        return $this;
    }

    /**
     * Get requisitos
     *
     * @return string 
     */
    public function getRequisitos()
    {
        return $this->requisitos;
    }

    /**
     * Set participantes
     *
     * @param string $participantes
     * @return Concurso
     */
    public function setParticipantes($participantes)
    {
        $this->participantes = $participantes;
    
        return $this;
    }

    /**
     * Get participantes
     *
     * @return string 
     */
    public function getParticipantes()
    {
        return $this->participantes;
    }

    /**
     * Set beneficios
     *
     * @param string $beneficios
     * @return Concurso
     */
    public function setBeneficios($beneficios)
    {
        $this->beneficios = $beneficios;
    
        return $this;
    }

    /**
     * Get beneficios
     *
     * @return string 
     */
    public function getBeneficios()
    {
        return $this->beneficios;
    }

    /**
     * Set categorias
     *
     * @param string $categorias
     * @return Concurso
     */
    public function setCategorias($categorias)
    {
        $this->categorias = $categorias;
    
        return $this;
    }

    /**
     * Get categorias
     *
     * @return string 
     */
    public function getCategorias()
    {
        return $this->categorias;
    }

    /**
     * Set premiootorgar
     *
     * @param string $premiootorgar
     * @return Concurso
     */
    public function setPremiootorgar($premiootorgar)
    {
        $this->premiootorgar = $premiootorgar;
    
        return $this;
    }

    /**
     * Get premiootorgar
     *
     * @return string 
     */
    public function getPremiootorgar()
    {
        return $this->premiootorgar;
    }

    /**
     * Set medallas
     *
     * @param string $medallas
     * @return Concurso
     */
    public function setMedallas($medallas)
    {
        $this->medallas = $medallas;
    
        return $this;
    }

    /**
     * Get medallas
     *
     * @return string 
     */
    public function getMedallas()
    {
        return $this->medallas;
    }

    /**
     * Set cuota
     *
     * @param string $cuota
     * @return Concurso
     */
    public function setCuota($cuota)
    {
        $this->cuota = $cuota;
    
        return $this;
    }

    /**
     * Get cuota
     *
     * @return string 
     */
    public function getCuota()
    {
        return $this->cuota;
    }

    /**
     * Set informacion
     *
     * @param string $informacion
     * @return Concurso
     */
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;
    
        return $this;
    }

    /**
     * Get informacion
     *
     * @return string 
     */
    public function getInformacion()
    {
        return $this->informacion;
    }

    /**
     * Set anio
     *
     * @param float $anio
     * @return Concurso
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    
        return $this;
    }

    /**
     * Get anio
     *
     * @return float 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set estadoemp
     *
     * @param string $estadoemp
     * @return Concurso
     */
    public function setEstadoemp($estadoemp)
    {
        $this->estadoemp = $estadoemp;
    
        return $this;
    }

    /**
     * Get estadoemp
     *
     * @return string 
     */
    public function getEstadoemp()
    {
        return $this->estadoemp;
    }

    /**
     * Set estadopy
     *
     * @param string $estadopy
     * @return Concurso
     */
    public function setEstadopy($estadopy)
    {
        $this->estadopy = $estadopy;
    
        return $this;
    }

    /**
     * Get estadopy
     *
     * @return string 
     */
    public function getEstadopy()
    {
        return $this->estadopy;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Concurso
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
     * Set terminoacepta
     *
     * @param string $terminoacepta
     * @return Concurso
     */
    public function setTerminoacepta($terminoacepta)
    {
        $this->terminoacepta = $terminoacepta;
    
        return $this;
    }

    /**
     * Get terminoacepta
     *
     * @return string 
     */
    public function getTerminoacepta()
    {
        return $this->terminoacepta;
    }

    /**
     * Set incpuntaje
     *
     * @param integer $incpuntaje
     * @return Concurso
     */
    public function setIncpuntaje($incpuntaje)
    {
        $this->incpuntaje = $incpuntaje;
    
        return $this;
    }

    /**
     * Get incpuntaje
     *
     * @return integer 
     */
    public function getIncpuntaje()
    {
        return $this->incpuntaje;
    }

    /**
     * Set evaluacriterio
     *
     * @param integer $evaluacriterio
     * @return Concurso
     */
    public function setEvaluacriterio($evaluacriterio)
    {
        $this->evaluacriterio = $evaluacriterio;
    
        return $this;
    }

    /**
     * Get evaluacriterio
     *
     * @return integer 
     */
    public function getEvaluacriterio()
    {
        return $this->evaluacriterio;
    }

    /**
     * Set informeretro
     *
     * @param string $informeretro
     * @return Concurso
     */
    public function setInformeretro($informeretro)
    {
        $this->informeretro = $informeretro;
    
        return $this;
    }

    /**
     * Get informeretro
     *
     * @return string 
     */
    public function getInformeretro()
    {
        return $this->informeretro;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     * @return Concurso
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;
    
        return $this;
    }

    /**
     * Get calificacion
     *
     * @return string 
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set prefijo
     *
     * @param string $prefijo
     * @return Concurso
     */
    public function setPrefijo($prefijo)
    {
        $this->prefijo = $prefijo;
    
        return $this;
    }

    /**
     * Get prefijo
     *
     * @return string 
     */
    public function getPrefijo()
    {
        return $this->prefijo;
    }
}
