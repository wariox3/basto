<?php

namespace Basto\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="copias")
 * @ORM\Entity(repositoryClass="Basto\FrontEndBundle\Repository\CopiasRepository")
 */
class Copias
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_copia_pk", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */ 
    private $codigoCopiaPk;

    /**
     * @ORM\Column(name="servidor", type="string", length=100, nullable=true)
     */      
    private $servidor;     
    
    /**
     * @ORM\Column(name="usuario_servidor", type="string", length=100, nullable=true)
     */      
    private $usuarioServidor;     

    /**
     * @ORM\Column(name="clave_servidor", type="string", length=100, nullable=true)
     */      
    private $claveServidor;         
    
    /**
     * @ORM\Column(name="nombre_base_datos", type="string", length=50, nullable=true)
     */      
    private $nombreBaseDatos;    
    

    /**
     * Get codigoCopiaPk
     *
     * @return integer 
     */
    public function getCodigoCopiaPk()
    {
        return $this->codigoCopiaPk;
    }

    /**
     * Set servidor
     *
     * @param string $servidor
     * @return Copias
     */
    public function setServidor($servidor)
    {
        $this->servidor = $servidor;

        return $this;
    }

    /**
     * Get servidor
     *
     * @return string 
     */
    public function getServidor()
    {
        return $this->servidor;
    }

    /**
     * Set usuarioServidor
     *
     * @param string $usuarioServidor
     * @return Copias
     */
    public function setUsuarioServidor($usuarioServidor)
    {
        $this->usuarioServidor = $usuarioServidor;

        return $this;
    }

    /**
     * Get usuarioServidor
     *
     * @return string 
     */
    public function getUsuarioServidor()
    {
        return $this->usuarioServidor;
    }

    /**
     * Set claveServidor
     *
     * @param string $claveServidor
     * @return Copias
     */
    public function setClaveServidor($claveServidor)
    {
        $this->claveServidor = $claveServidor;

        return $this;
    }

    /**
     * Get claveServidor
     *
     * @return string 
     */
    public function getClaveServidor()
    {
        return $this->claveServidor;
    }

    /**
     * Set nombreBaseDatos
     *
     * @param string $nombreBaseDatos
     * @return Copias
     */
    public function setNombreBaseDatos($nombreBaseDatos)
    {
        $this->nombreBaseDatos = $nombreBaseDatos;

        return $this;
    }

    /**
     * Get nombreBaseDatos
     *
     * @return string 
     */
    public function getNombreBaseDatos()
    {
        return $this->nombreBaseDatos;
    }
}
