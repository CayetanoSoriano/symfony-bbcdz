<?php

namespace candgo\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Usuarios")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
/*
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $dni;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $telf;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $cod_postal;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $ciudad;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $pais;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre_y_apellidos;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $newslater;

    public function __construct()
    {
        parent::__construct();
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
     * Set telf
     *
     * @param string $telf
     */
    public function setTelf($telf)
    {
        $this->telf = $telf;
    }

    /**
     * Get telf
     *
     * @return string
     */
    public function getTelf()
    {
        return $this->telf;
    }

    /**
     * Set cod_postal
     *
     * @param string $codPostal
     */
    public function setCodPostal($codPostal)
    {
        $this->cod_postal = $codPostal;
    }

    /**
     * Get cod_postal
     *
     * @return string
     */
    public function getCodPostal()
    {
        return $this->cod_postal;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set pais
     *
     * @param string $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set nombre_y_apellidos
     *
     * @param string $nombreYApellidos
     */
    public function setNombreYApellidos($nombreYApellidos)
    {
        $this->nombre_y_apellidos = $nombreYApellidos;
    }

    /**
     * Get nombre_y_apellidos
     *
     * @return string
     */
    public function getNombreYApellidos()
    {
        return $this->nombre_y_apellidos;
    }

    /**
     * Set newslater
     *
     * @param string $newslater
     */
    public function setNewslater($newslater)
    {
        $this->newslater = $newslater;
    }

    /**
     * Get newslater
     *
     * @return string
     */
    public function getNewslater()
    {
        return $this->newslater;
    }

    /**
     * Add eventos
     *
     * @param candgo\EventoBundle\Entity\Evento $eventos
     */
    public function addEvento(\candgo\EventoBundle\Entity\Evento $eventos)
    {
        $eventos->setPropietario($this);
        $this->eventos[] = $eventos;
    }

    /**
     * Get eventos
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getEventos()
    {
        return $this->eventos;
    }

    /**
     * Remove eventos
     *
     * @param <variableType$eventos
     */
    public function removeEvento(\candgo\EventoBundle\Entity\Evento $eventos)
    {
        $this->eventos->removeElement($eventos);
    }
}