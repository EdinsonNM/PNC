<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtapaEvaluacion
 *
 * @ORM\Table(name="etapa_evaluacion")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\EtapaEvaluacionRepository")
 */
class EtapaEvaluacion
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
    * @ORM\OneToMany(targetEntity="ConcursoCronograma", mappedBy="EtapaEvaluacion")
    */
    protected $etapaevaluacion;
    
    public function __construct()
    {
        $this->etapaevaluacion = new \Doctrine\Common\Collections\ArrayCollection();
       
    }
    
    /**
     * Add etapaevaluacion
     *
     * @param App\WebBundle\Entity\ConcursoCronograma $etapaevaluacion
     */
    public function addEtapaEvaluacion(\App\WebBundle\Entity\ConcursoCronograma $etapaevaluacion)
    {
        $this->etapaevaluacion[] = $etapaevaluacion;
    }
    
    /**
     * Get etapaevaluacion
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEtapaEvaluacion()
    {
        return $this->etapaevaluacion;
    }
    
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
     * @return EtapaEvaluacion
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
}
