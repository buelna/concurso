<?php

namespace Concurso\RegistroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Alumno
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"curp"},
 *     errorPath="curp",
 *     message="Este usuario ya se encuentra registrado"
 * )
 */
class Alumno
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
     * @ORM\Column(name="apellidoPaterno", type="string", length=45)
     */
    private $apellidoPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoMaterno", type="string", length=50)
     */
    private $apellidoMaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="semestre", type="integer", length=11)
     */
    private $semestre;

    /**
     * @var string
     *
     * @ORM\Column(name="curp", type="string", length=20)
     */
    private $curp;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Concurso\RegistroBundle\Entity\Equipo")
     * @ORM\JoinColumn(name="idEquipo", referencedColumnName="id")
     */
    private $idEquipo;


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
     * @return Alumno
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
     * Set apellidoPaterno
     *
     * @param string $apellidoPaterno
     * @return Alumno
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;

        return $this;
    }

    /**
     * Get apellidoPaterno
     *
     * @return string 
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     * @return Alumno
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string 
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Alumno
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
     * Set semestre
     *
     * @param \integer $semestre
     * @return Alumno
     */
    public function setSemestre(\integer $semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return \integer 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set curp
     *
     * @param string $curp
     * @return Alumno
     */
    public function setCurp($curp)
    {
        $this->curp = $curp;

        return $this;
    }

    /**
     * Get curp
     *
     * @return string 
     */
    public function getCurp()
    {
        return $this->curp;
    }

    /**
     * Set idEquipo
     *
     * @param Equipo
     * @return Alumno
     */
    public function setIdEquipo(Equipo $id_Equipo)
    {
        $this->idEquipo = $id_Equipo;
        return $this;
    
       
    }

    /**
     * Get idEquipo
     *
     * @return Concurso\RegistroBundle\Entity\Equipo
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }
}
