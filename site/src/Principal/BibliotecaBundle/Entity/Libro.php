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
 * Principal\BibliotecaBundle\Entity\Libro
 *
 * @ORM\Entity()
 * @ORM\Table(name="Libro", indexes={@ORM\Index(name="fk_Libro_Autor_idx", columns={"Autor_id"}), @ORM\Index(name="fk_Libro_Usuario1_idx", columns={"Usuario_id"})})
 */
class Libro
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $Nombre;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $Pagina;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $Annio;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $Licencia;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $Sinopsis;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $Aprobado;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $Archivo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $Foto;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $Autor_id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $FechaHora;

    /**
     * @ORM\Column(type="integer")
     */
    protected $Usuario_id;

    /**
     * @ORM\OneToMany(targetEntity="CategoriaLibro", mappedBy="libro")
     * @ORM\JoinColumn(name="id", referencedColumnName="Libro_id")
     */
    protected $categoriaLibros;

    /**
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="libro")
     * @ORM\JoinColumn(name="id", referencedColumnName="Libro_id")
     */
    protected $comentarios;

    /**
     * @ORM\ManyToOne(targetEntity="Autor", inversedBy="libros")
     * @ORM\JoinColumn(name="Autor_id", referencedColumnName="id")
     */
    protected $autor;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="libros")
     * @ORM\JoinColumn(name="Usuario_id", referencedColumnName="id")
     */
    protected $usuario;

    public function __construct()
    {
        $this->categoriaLibros = new ArrayCollection();
        $this->comentarios = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Principal\BibliotecaBundle\Entity\Libro
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
     * @return \Principal\BibliotecaBundle\Entity\Libro
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
     * Set the value of Pagina.
     *
     * @param string $Pagina
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setPagina($Pagina)
    {
        $this->Pagina = $Pagina;

        return $this;
    }

    /**
     * Get the value of Pagina.
     *
     * @return string
     */
    public function getPagina()
    {
        return $this->Pagina;
    }

    /**
     * Set the value of Annio.
     *
     * @param string $Annio
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setAnnio($Annio)
    {
        $this->Annio = $Annio;

        return $this;
    }

    /**
     * Get the value of Annio.
     *
     * @return string
     */
    public function getAnnio()
    {
        return $this->Annio;
    }

    /**
     * Set the value of Licencia.
     *
     * @param string $Licencia
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setLicencia($Licencia)
    {
        $this->Licencia = $Licencia;

        return $this;
    }

    /**
     * Get the value of Licencia.
     *
     * @return string
     */
    public function getLicencia()
    {
        return $this->Licencia;
    }

    /**
     * Set the value of Sinopsis.
     *
     * @param string $Sinopsis
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setSinopsis($Sinopsis)
    {
        $this->Sinopsis = $Sinopsis;

        return $this;
    }

    /**
     * Get the value of Sinopsis.
     *
     * @return string
     */
    public function getSinopsis()
    {
        return $this->Sinopsis;
    }

    /**
     * Set the value of Aprobado.
     *
     * @param boolean $Aprobado
     * @return \Principal\BibliotecaBundle\Entity\Libro
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
     * Set the value of Archivo.
     *
     * @param string $Archivo
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setArchivo($Archivo)
    {
        $this->Archivo = $Archivo;

        return $this;
    }

    /**
     * Get the value of Archivo.
     *
     * @return string
     */
    public function getArchivo()
    {
        return $this->Archivo;
    }

    /**
     * Set the value of Foto.
     *
     * @param string $Foto
     * @return \Principal\BibliotecaBundle\Entity\Libro
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
     * Set the value of Autor_id.
     *
     * @param integer $Autor_id
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setAutorId($Autor_id)
    {
        $this->Autor_id = $Autor_id;

        return $this;
    }

    /**
     * Get the value of Autor_id.
     *
     * @return integer
     */
    public function getAutorId()
    {
        return $this->Autor_id;
    }

    /**
     * Set the value of FechaHora.
     *
     * @param datetime $FechaHora
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setFechaHora($FechaHora)
    {
        $this->FechaHora = $FechaHora;

        return $this;
    }

    /**
     * Get the value of FechaHora.
     *
     * @return datetime
     */
    public function getFechaHora()
    {
        return $this->FechaHora;
    }

    /**
     * Set the value of Usuario_id.
     *
     * @param integer $Usuario_id
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setUsuarioId($Usuario_id)
    {
        $this->Usuario_id = $Usuario_id;

        return $this;
    }

    /**
     * Get the value of Usuario_id.
     *
     * @return integer
     */
    public function getUsuarioId()
    {
        return $this->Usuario_id;
    }

    /**
     * Add CategoriaLibro entity to collection (one to many).
     *
     * @param \Principal\BibliotecaBundle\Entity\CategoriaLibro $categoriaLibro
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function addCategoriaLibro(CategoriaLibro $categoriaLibro)
    {
        $this->categoriaLibros[] = $categoriaLibro;

        return $this;
    }

    /**
     * Remove CategoriaLibro entity from collection (one to many).
     *
     * @param \Principal\BibliotecaBundle\Entity\CategoriaLibro $categoriaLibro
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function removeCategoriaLibro(CategoriaLibro $categoriaLibro)
    {
        $this->categoriaLibros->removeElement($categoriaLibro);

        return $this;
    }

    /**
     * Get CategoriaLibro entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategoriaLibros()
    {
        return $this->categoriaLibros;
    }

    /**
     * Add Comentario entity to collection (one to many).
     *
     * @param \Principal\BibliotecaBundle\Entity\Comentario $comentario
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function addComentario(Comentario $comentario)
    {
        $this->comentarios[] = $comentario;

        return $this;
    }

    /**
     * Remove Comentario entity from collection (one to many).
     *
     * @param \Principal\BibliotecaBundle\Entity\Comentario $comentario
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function removeComentario(Comentario $comentario)
    {
        $this->comentarios->removeElement($comentario);

        return $this;
    }

    /**
     * Get Comentario entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set Autor entity (many to one).
     *
     * @param \Principal\BibliotecaBundle\Entity\Autor $autor
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setAutor(Autor $autor = null)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get Autor entity (many to one).
     *
     * @return \Principal\BibliotecaBundle\Entity\Autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set Usuario entity (many to one).
     *
     * @param \Principal\BibliotecaBundle\Entity\Usuario $usuario
     * @return \Principal\BibliotecaBundle\Entity\Libro
     */
    public function setUsuario(Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get Usuario entity (many to one).
     *
     * @return \Principal\BibliotecaBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function __sleep()
    {
        return array('id', 'Nombre', 'Pagina', 'Annio', 'Licencia', 'Sinopsis', 'Aprobado', 'Archivo', 'Foto', 'Autor_id', 'FechaHora', 'Usuario_id');
    }
}