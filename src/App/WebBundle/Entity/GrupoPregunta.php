<?php

namespace App\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoPregunta
 *
 * @ORM\Table(name="enc_grupo_pregunta")
 * @ORM\Entity(repositoryClass="App\WebBundle\Entity\GrupoPreguntaRepository")
 */
class GrupoPregunta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idgrupo_pregunta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="identificador", type="string", length=10)
     */
    private $identificador;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_grupo", type="string", length=100)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer")
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
     * Set identificador
     *
     * @param string $identificador
     * @return GrupoPregunta
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;
    
        return $this;
    }

    /**
     * Get identificador
     *
     * @return string 
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return GrupoPregunta
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
     * Set estado
     *
     * @param integer $estado
     * @return GrupoPregunta
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
