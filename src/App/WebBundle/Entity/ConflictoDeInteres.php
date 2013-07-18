<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\WebBundle\Entity\TipoVinculo;
use App\WebBundle\Entity\Evaluador;

/**
 * ConflictoDeInteres
 *
 * @ORM\Table(name="conflictos_de_interes")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\ConflictoDeInteresRepository")
 */
class ConflictoDeInteres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idconflicto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="razonsocial1", type="string", length=100)
     */
    private $razonsocial1;

    /**
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11)
     */
    private $ruc;

    /**
     * @var string
     *
     * @ORM\Column(name="razonsocial2", type="string", length=100)
     */
    private $razonsocial2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="date")
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date")
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="razonsocial3", type="string", length=100)
     */
    private $razonsocial3;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
    * @ORM\ManyToOne(targetEntity="TipoVinculo", inversedBy="vinculo")
    * @ORM\JoinColumn(name="idvinculo", referencedColumnName="idvinculo")
    */
    protected $vinculo;
    
    /**
    * @ORM\ManyToOne(targetEntity="Evaluador", inversedBy="evaluador")
    * @ORM\JoinColumn(name="idevaluador", referencedColumnName="idevaluador")
    */
    protected $evaluador;

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
     * Set razonsocial1
     *
     * @param string $razonsocial1
     * @return ConflictoDeInteres
     */
    public function setRazonsocial1($razonsocial1)
    {
        $this->razonsocial1 = $razonsocial1;
    
        return $this;
    }

    /**
     * Get razonsocial1
     *
     * @return string 
     */
    public function getRazonsocial1()
    {
        return $this->razonsocial1;
    }

    /**
     * Set ruc
     *
     * @param string $ruc
     * @return ConflictoDeInteres
     */
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;
    
        return $this;
    }

    /**
     * Get ruc
     *
     * @return string 
     */
    public function getRuc()
    {
        return $this->ruc;
    }

    /**
     * Set razonsocial2
     *
     * @param string $razonsocial2
     * @return ConflictoDeInteres
     */
    public function setRazonsocial2($razonsocial2)
    {
        $this->razonsocial2 = $razonsocial2;
    
        return $this;
    }

    /**
     * Get razonsocial2
     *
     * @return string 
     */
    public function getRazonsocial2()
    {
        return $this->razonsocial2;
    }

    /**
     * Set inicio
     *
     * @param \DateTime $inicio
     * @return ConflictoDeInteres
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    
        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime 
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return ConflictoDeInteres
     */
    public function setFin($fin)
    {
        $this->fin = $fin;
    
        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set razonsocial3
     *
     * @param string $razonsocial3
     * @return ConflictoDeInteres
     */
    public function setRazonsocial3($razonsocial3)
    {
        $this->razonsocial3 = $razonsocial3;
    
        return $this;
    }

    /**
     * Get razonsocial3
     *
     * @return string 
     */
    public function getRazonsocial3()
    {
        return $this->razonsocial3;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ConflictoDeInteres
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
     * Set vinculo
     *
     * @param App\WebBundle\Entity\TipoVinculo $vinculo
     */
    public function setVinculo(\App\WebBundle\Entity\TipoVinculo $vinculo)
    {
        $this->vinculo = $vinculo;
    }
     /**
     * Get vinculo
     *
     * @return App\WebBundle\Entity\TipoVinculo 
     */
    public function getVinculo()
    {
        return $this->vinculo;
    }
    
    /**
     * Set evaluador
     *
     * @param App\WebBundle\Entity\Evaluador $evaluador
     */
    public function setEvaluador(\App\WebBundle\Entity\Evaluador $evaluador)
    {
        $this->evaluador = $evaluador;
    }
     /**
     * Get evaluador
     *
     * @return App\WebBundle\Entity\Evaluador 
     */
    public function getEvaluador()
    {
        return $this->evaluador;
    }
    
    
}
