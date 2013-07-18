<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoVinculo
 *
 * @ORM\Table(name="tipo_de_vinculo")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\TipoVinculoRepository")
 */
class TipoVinculo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idvinculo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1)
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoVinculo
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
     * Set nombre
     *
     * @param string $nombre
     * @return TipoVinculo
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
     * Set codigo
     *
     * @param integer $codigo
     * @return TipoVinculo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return TipoVinculo
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
    * @ORM\OneToMany(targetEntity="ConflictoDeInteres", mappedBy="TipoVinculo")
    */
    protected $vinculo;
    
    public function __construct()
    {
        $this->vinculo = new \Doctrine\Common\Collections\ArrayCollection();
       
    }
    
    /**
     * Add vinculo
     *
     * @param App\WebBundle\Entity\ConflictoDeInteres $vinculo
     */
    public function addVinculo(\App\WebBundle\Entity\ConflictoDeInteres $vinculo)
    {
        $this->vinculo[] = $vinculo;
    }
    
    /**
     * Get vinculo
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getVinculo()
    {
        return $this->vinculo;
    }
    
}
