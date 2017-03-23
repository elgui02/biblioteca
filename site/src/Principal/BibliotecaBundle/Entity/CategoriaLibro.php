<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2017-03-23 16:41:41.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Principal\BibliotecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Principal\BibliotecaBundle\Entity\CategoriaLibro
 *
 * @ORM\Entity()
 * @ORM\Table(name="CategoriaLibro", indexes={@ORM\Index(name="fk_CategoriaLibro_Libro1_idx", columns={"Libro_id"}), @ORM\Index(name="fk_CategoriaLibro_Categoria1_idx", columns={"Categoria_id"})})
 */
class CategoriaLibro
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $Libro_id;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $Categoria_id;

    /**
     * @ORM\ManyToOne(targetEntity="Libro", inversedBy="categoriaLibros")
     * @ORM\JoinColumn(name="Libro_id", referencedColumnName="id")
     */
    protected $libro;

    /**
     * @ORM\ManyToOne(targetEntity="Categorium", inversedBy="categoriaLibros")
     * @ORM\JoinColumn(name="Categoria_id", referencedColumnName="id")
     */
    protected $categorium;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Principal\BibliotecaBundle\Entity\CategoriaLibro
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
     * Set the value of Libro_id.
     *
     * @param integer $Libro_id
     * @return \Principal\BibliotecaBundle\Entity\CategoriaLibro
     */
    public function setLibroId($Libro_id)
    {
        $this->Libro_id = $Libro_id;

        return $this;
    }

    /**
     * Get the value of Libro_id.
     *
     * @return integer
     */
    public function getLibroId()
    {
        return $this->Libro_id;
    }

    /**
     * Set the value of Categoria_id.
     *
     * @param integer $Categoria_id
     * @return \Principal\BibliotecaBundle\Entity\CategoriaLibro
     */
    public function setCategoriaId($Categoria_id)
    {
        $this->Categoria_id = $Categoria_id;

        return $this;
    }

    /**
     * Get the value of Categoria_id.
     *
     * @return integer
     */
    public function getCategoriaId()
    {
        return $this->Categoria_id;
    }

    /**
     * Set Libro entity (many to one).
     *
     * @param \Principal\BibliotecaBundle\Entity\Libro $libro
     * @return \Principal\BibliotecaBundle\Entity\CategoriaLibro
     */
    public function setLibro(Libro $libro = null)
    {
        $this->libro = $libro;

        return $this;
    }

    /**
     * Get Libro entity (many to one).
     *
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function getLibro()
    {
        return $this->libro;
    }

    /**
     * Set Categorium entity (many to one).
     *
     * @param \Principal\BibliotecaBundle\Entity\Categorium $categorium
     * @return \Principal\BibliotecaBundle\Entity\CategoriaLibro
     */
    public function setCategorium(Categorium $categorium = null)
    {
        $this->categorium = $categorium;

        return $this;
    }

    /**
     * Get Categorium entity (many to one).
     *
     * @return \Principal\BibliotecaBundle\Entity\Categorium
     */
    public function getCategorium()
    {
        return $this->categorium;
    }

    public function __sleep()
    {
        return array('id', 'Libro_id', 'Categoria_id');
    }
}