<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TerminoAceptacion
 *
 * @ORM\Table(name="termino_aceptacion")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\TerminoAceptacionRepository")
 */
class TerminoAceptacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtermino", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="formulario", type="string", length=1)
     */
    private $formulario;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

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
     * Set formulario
     *
     * @param string $formulario
     * @return TerminoAceptacion
     */
    public function setFormulario($formulario)
    {
        $this->formulario = $formulario;
    
        return $this;
    }

    /**
     * Get formulario
     *
     * @return string 
     */
    public function getFormulario()
    {
        return $this->formulario;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TerminoAceptacion
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
     * @return TerminoAceptacion
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
}
