<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsable
 *
 * @ORM\Table(name="concurso_responsable")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\ResponsableRepository")
 */
class Responsable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idresponsable", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_responsable", type="string", length=250)
     */
    private $nombre;

    /**
    * @ORM\OneToMany(targetEntity="ConcursoCronograma", mappedBy="Responsable")
    */
    protected $responsable;
    
    public function __construct()
    {
        $this->responsable = new \Doctrine\Common\Collections\ArrayCollection();
       
    }
    
    /**
     * Add respnsable
     *
     * @param App\WebBundle\Entity\ConcursoCronograma $responsable
     */
    public function addResponsable(\App\WebBundle\Entity\ConcursoCronograma $responsable)
    {
        $this->responsable[] = $responsable;
    }
    
    /**
     * Get responsable
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getResponsable()
    {
        return $this->responsable;
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
     * @return Responsable
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
