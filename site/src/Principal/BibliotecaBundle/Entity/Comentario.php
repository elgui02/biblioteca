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
 * Principal\BibliotecaBundle\Entity\Comentario
 *
 * @ORM\Entity()
 * @ORM\Table(name="Comentario", indexes={@ORM\Index(name="fk_Comentario_Libro1_idx", columns={"libro_id"}), @ORM\Index(name="fk_Comentario_Usuario1_idx", columns={"usuario_id"})})
 */
class Comentario
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $Comentario;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $FechaHora;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $Libro_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $Usuario_id;

    /**
     * @ORM\ManyToOne(targetEntity="Libro", inversedBy="comentarios")
     * @ORM\JoinColumn(name="libro_id", referencedColumnName="id")
     */
    protected $libro;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="comentarios")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Principal\BibliotecaBundle\Entity\Comentario
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
     * Set the value of Comentario.
     *
     * @param string $Comentario
     * @return \Principal\BibliotecaBundle\Entity\Comentario
     */
    public function setComentario($Comentario)
    {
        $this->Comentario = $Comentario;

        return $this;
    }

    /**
     * Get the value of Comentario.
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->Comentario;
    }

    /**
     * Set the value of FechaHora.
     *
     * @param datetime $FechaHora
     * @return \Principal\BibliotecaBundle\Entity\Comentario
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
     * Set the value of Libro_id.
     *
     * @param integer $Libro_id
     * @return \Principal\BibliotecaBundle\Entity\Comentario
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
     * Set the value of Usuario_id.
     *
     * @param integer $Usuario_id
     * @return \Principal\BibliotecaBundle\Entity\Comentario
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
     * Set Libro entity (many to one).
     *
     * @param \Principal\BibliotecaBundle\Entity\Libro $libro
     * @return \Principal\BibliotecaBundle\Entity\Comentario
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
     * Set Usuario entity (many to one).
     *
     * @param \Principal\BibliotecaBundle\Entity\Usuario $usuario
     * @return \Principal\BibliotecaBundle\Entity\Comentario
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
        return array('id', 'Comentario', 'FechaHora', 'Libro_id', 'Usuario_id');
    }
}