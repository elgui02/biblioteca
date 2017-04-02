<?php

namespace Principal\BibliotecaBundle\Controller;

use Principal\BibliotecaBundle\Entity\Libro;
use Principal\BibliotecaBundle\Entity\Autor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;

/**
 * Libro controller.
 *
 * @Route("libro")
 */
class LibroController extends Controller
{
    /**
     * Lists all libro entities.
     *
     * @Route("/", name="libro_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $libros = $em->getRepository('PrincipalBibliotecaBundle:Libro')->findAll();

        return $this->render('libro/index.html.twig', array(
            'libros' => $libros,
        ));
    }

    /**
     * Creates a new libro entity.
     *
     * @Route("/{id}/new", name="libro_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Autor $autor)
    {
        $libro = new Libro();
        $libro->setAutor($autor);
        $libro->setUsuario($this->getUser());
        $libro->setFechaHora(new \DateTime());
        $form = $this->createForm('Principal\BibliotecaBundle\Form\LibroType', $libro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($libro);
            $em->flush($libro);

            return $this->redirectToRoute('libro_show', array('id' => $libro->getId()));
        }

        return $this->render('libro/new.html.twig', array(
            'libro' => $libro,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a libro entity.
     *
     * @Route("/{id}", name="libro_show")
     * @Method("GET")
     */
    public function showAction(Libro $libro)
    {
        $deleteForm = $this->createDeleteForm($libro);

        return $this->render('libro/show.html.twig', array(
            'libro' => $libro,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing libro entity.
     *
     * @Route("/{id}/edit", name="libro_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Libro $libro)
    {
        $deleteForm = $this->createDeleteForm($libro);
        $editForm = $this->createForm('Principal\BibliotecaBundle\Form\LibroType', $libro);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('libro_edit', array('id' => $libro->getId()));
        }

        return $this->render('libro/edit.html.twig', array(
            'libro' => $libro,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a libro entity.
     *
     * @Route("/{id}", name="libro_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Libro $libro)
    {
        $form = $this->createDeleteForm($libro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($libro);
            $em->flush();
        }

        return $this->redirectToRoute('libro_index');
    }

    /**
     * Creates a form to delete a libro entity.
     *
     * @param Libro $libro The libro entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Libro $libro)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('libro_delete', array('id' => $libro->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
