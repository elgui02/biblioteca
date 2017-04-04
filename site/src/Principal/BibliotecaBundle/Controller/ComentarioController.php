<?php

namespace Principal\BibliotecaBundle\Controller;

use Principal\BibliotecaBundle\Entity\Comentario;
use Principal\BibliotecaBundle\Entity\Libro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;

/**
 * Comentario controller.
 *
 * @Route("comentario")
 */
class ComentarioController extends Controller
{
    /**
     * Lists all comentario entities.
     *
     * @Route("/", name="comentario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $comentarios = $em->getRepository('PrincipalBibliotecaBundle:Comentario')->findBy(
            array(),
            array('FechaHora' => 'DESC'),
            5
        );
        return $this->render('comentario/index.html.twig', array(
            'comentarios' => $comentarios,
        ));
    }

    /**
     * Creates a new comentario entity.
     *
     * @Route("/{id}/new", name="comentario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Libro $libro)
    {
        $comentario = new Comentario();
        $comentario->setLibro($libro);
        $comentario->setUsuario($this->getUser());
        $comentario->setFechaHora(new \DateTime());

        $form = $this->createForm('Principal\BibliotecaBundle\Form\ComentarioType', $comentario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comentario);
            $em->flush($comentario);

            return $this->redirectToRoute('default_post', array('id' => $comentario->getLibro()->getId()));
        }

        return $this->render('comentario/new.html.twig', array(
            'comentario' => $comentario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a comentario entity.
     *
     * @Route("/{id}", name="comentario_show")
     * @Method("GET")
     */
    public function showAction(Comentario $comentario)
    {
        $deleteForm = $this->createDeleteForm($comentario);

        return $this->render('comentario/show.html.twig', array(
            'comentario' => $comentario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing comentario entity.
     *
     * @Route("/{id}/edit", name="comentario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Comentario $comentario)
    {
        $deleteForm = $this->createDeleteForm($comentario);
        $editForm = $this->createForm('Principal\BibliotecaBundle\Form\ComentarioType', $comentario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comentario_edit', array('id' => $comentario->getId()));
        }

        return $this->render('comentario/edit.html.twig', array(
            'comentario' => $comentario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a comentario entity.
     *
     * @Route("/{id}", name="comentario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Comentario $comentario)
    {
        $form = $this->createDeleteForm($comentario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($comentario);
            $em->flush();
        }

        return $this->redirectToRoute('comentario_index');
    }

    /**
     * Creates a form to delete a comentario entity.
     *
     * @param Comentario $comentario The comentario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Comentario $comentario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comentario_delete', array('id' => $comentario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
