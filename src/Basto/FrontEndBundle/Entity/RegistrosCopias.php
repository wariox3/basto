<?php

namespace Basto\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="registros_copias")
 * @ORM\Entity(repositoryClass="Basto\FrontEndBundle\Repository\RegistrosCopiasRepository")
 */
class RegistrosCopias
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_registro_copia_pk", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */ 
    private $codigoRegistroCopiaPk;
    
    /**
     * @ORM\Column(name="fecha_inicio", type="datetime", nullable=true)
     */    
    private $fechaInicio;     

    /**
     * @ORM\Column(name="fecha_fin", type="datetime", nullable=true)
     */    
    private $fechaFin;   
    
    /**
     * @ORM\Column(name="peso_archivo", type="integer", nullable=true)
     */    
    private $pesoArchivo;
    
    /**
     * @ORM\Column(name="nombre_archivo", type="string", length=50, nullable=true)
     */    
    private $nombreArchivo;     

    /**
     * @ORM\Column(name="directorio", type="string", length=50, nullable=true)
     */    
    private $directorio;    
    

    /**
     * Get codigoRegistroCopiaPk
     *
     * @return integer 
     */
    public function getCodigoRegistroCopiaPk()
    {
        return $this->codigoRegistroCopiaPk;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return RegistrosCopias
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return RegistrosCopias
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set pesoArchivo
     *
     * @param integer $pesoArchivo
     * @return RegistrosCopias
     */
    public function setPesoArchivo($pesoArchivo)
    {
        $this->pesoArchivo = $pesoArchivo;

        return $this;
    }

    /**
     * Get pesoArchivo
     *
     * @return integer 
     */
    public function getPesoArchivo()
    {
        return $this->pesoArchivo;
    }

    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return RegistrosCopias
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string 
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Set directorio
     *
     * @param string $directorio
     * @return RegistrosCopias
     */
    public function setDirectorio($directorio)
    {
        $this->directorio = $directorio;

        return $this;
    }

    /**
     * Get directorio
     *
     * @return string 
     */
    public function getDirectorio()
    {
        return $this->directorio;
    }
}
