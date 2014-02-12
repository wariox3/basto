<?php

namespace Basto\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="terceros")
 * @ORM\Entity(repositoryClass="Basto\FrontEndBundle\Repository\TercerosRepository")
 */
class Terceros
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_tercero_pk", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */ 
    private $codigoTerceroPk;

    /**
     * @ORM\Column(name="nit", type="string", length=12, nullable=true)
     */      
    private $nit;            
    
    /**
     * @ORM\Column(name="nombre_corto", type="string", length=50, nullable=true)
     */      
    private $nombreCorto;        


    /**
     * Get codigoTerceroPk
     *
     * @return integer 
     */
    public function getCodigoTerceroPk()
    {
        return $this->codigoTerceroPk;
    }

    /**
     * Set nit
     *
     * @param string $nit
     * @return Terceros
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set nombreCorto
     *
     * @param string $nombreCorto
     * @return Terceros
     */
    public function setNombreCorto($nombreCorto)
    {
        $this->nombreCorto = $nombreCorto;

        return $this;
    }

    /**
     * Get nombreCorto
     *
     * @return string 
     */
    public function getNombreCorto()
    {
        return $this->nombreCorto;
    }
}
