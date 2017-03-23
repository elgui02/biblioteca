<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2017-03-23 16:41:41.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Principal\BibliotecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Principal\BibliotecaBundle\Entity\Autor
 *
 * @ORM\Entity()
 * @ORM\Table(name="Autor")
 */
class Autor
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $Nombre;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $Nacionalidad;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $Aprobado;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $Foto;

    /**
     * @ORM\OneToMany(targetEntity="Libro", mappedBy="autor")
     * @ORM\JoinColumn(name="id", referencedColumnName="Autor_id")
     */
    protected $libros;

    public function __construct()
    {
        $this->libros = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Principal\BibliotecaBundle\Entity\Autor
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Nombre.
     *
     * @param string $Nombre
     * @return \Principal\BibliotecaBundle\Entity\Autor
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    /**
     * Get the value of Nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set the value of Nacionalidad.
     *
     * @param string $Nacionalidad
     * @return \Principal\BibliotecaBundle\Entity\Autor
     */
    public function setNacionalidad($Nacionalidad)
    {
        $this->Nacionalidad = $Nacionalidad;

        return $this;
    }

    /**
     * Get the value of Nacionalidad.
     *
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->Nacionalidad;
    }

    /**
     * Set the value of Aprobado.
     *
     * @param boolean $Aprobado
     * @return \Principal\BibliotecaBundle\Entity\Autor
     */
    public function setAprobado($Aprobado)
    {
        $this->Aprobado = $Aprobado;

        return $this;
    }

    /**
     * Get the value of Aprobado.
     *
     * @return boolean
     */
    public function getAprobado()
    {
        return $this->Aprobado;
    }

    /**
     * Set the value of Foto.
     *
     * @param string $Foto
     * @return \Principal\BibliotecaBundle\Entity\Autor
     */
    public function setFoto($Foto)
    {
        $this->Foto = $Foto;

        return $this;
    }

    /**
     * Get the value of Foto.
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->Foto;
    }

    /**
     * Add Libro entity to collection (one to many).
     *
     * @param \Principal\BibliotecaBundle\Entity\Libro $libro
     * @return \Principal\BibliotecaBundle\Entity\Autor
     */
    public function addLibro(Libro $libro)
    {
        $this->libros[] = $libro;

        return $this;
    }

    /**
     * Remove Libro entity from collection (one to many).
     *
     * @param \Principal\BibliotecaBundle\Entity\Libro $libro
     * @return \Principal\BibliotecaBundle\Entity\Autor
     */
    public function removeLibro(Libro $libro)
    {
        $this->libros->removeElement($libro);

        return $this;
    }

    /**
     * Get Libro entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLibros()
    {
        return $this->libros;
    }

    public function __sleep()
    {
        return array('id', 'Nombre', 'Nacionalidad', 'Aprobado', 'Foto');
    }
}