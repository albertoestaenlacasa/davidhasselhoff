<?php

namespace DHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Peliculas
 */
class Peliculas
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $director;

    /**
     * @var string
     */
    private $genero;

    /**
     * @var string
     */
    private $sinopsis;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $urlImg;


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
     * Set titulo
     *
     * @param string $titulo
     * @return Peliculas
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set director
     *
     * @param string $director
     * @return Peliculas
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return Peliculas
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set sinopsis
     *
     * @param string $sinopsis
     * @return Peliculas
     */
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    /**
     * Get sinopsis
     *
     * @return string 
     */
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Peliculas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set urlImg
     *
     * @param string $urlImg
     * @return Peliculas
     */
    public function setUrlImg($urlImg)
    {
        $this->urlImg = $urlImg;

        return $this;
    }

    /**
     * Get urlImg
     *
     * @return string 
     */
    public function getUrlImg()
    {
        return $this->urlImg;
    }
}
