<?php

namespace Concurso\RegistroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Equipo
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"idUsuario"},
 *     errorPath="idUsuario",
 *     message="Este usuario solo debe tener un equipo"
 * )
 */
class Equipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="preparatoria", type="string", length=45)
     */
    private $preparatoria;

    /**
     * @var string
     *
     * @ORM\Column(name="lenguaje", type="string", length=45)
     */
    private $lenguaje;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Concurso\RegistroBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
     */
    private $idUsuario;


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
     * @return Equipo
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
     * Set Preparatoria
     *
     * @param string $preparatoria
     * @return Equipo
     */
    public function setPreparatoria($preparatoria)
    {
        $this->preparatoria = $preparatoria;

        return $this;
    }

    /**
     * Get Preparatoria
     *
     * @return string 
     */
    public function getPreparatoria()
    {
        return $this->preparatoria;
    }

    /**
     * Set Lenguaje
     *
     * @param string $lenguaje
     * @return Equipo
     */
    public function setLenguaje($lenguaje)
    {
        $this->lenguaje = $lenguaje;

        return $this;
    }

    /**
     * Get Lenguaje
     *
     * @return string 
     */
    public function getLenguaje()
    {
        return $this->lenguaje;
    }

    /**
     * Set idUsuario
     *
     * @param Usuario
     * @return Equipo
     */
    public function setIdUsuario(Usuario $id_Usuario)
    {
        $this->idUsuario = $id_Usuario;
        return $this;
    
       
    }

    /**
     * Get idUsuario
     *
     * @return Concurso\RegistroBundle\Entity\Usuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function __toString()
    {
        return $this->getNombre();
    }

}
