<?php

namespace Principal\BibliotecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Principal\BibliotecaBundle\Entity\Libro;

/**
 * Autor controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * Lists all autor entities.
     *
     * @Route("/", name="default_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT l FROM PrincipalBibliotecaBundle:Libro l WHERE l.Aprobado = true ORDER BY l.FechaHora DESC";
        $query = $em->createQuery($dql);
 
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, 
                $request->query->getInt('page', 1),
                5
        );


        return $this->render('default/index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
    
    /**
     * Lists all autor entities.
     *
     * @Route("/post/{id}", name="default_post")
     * @Method("GET")
     */
    public function postAction(Libro $libro)
    {
        return $this->render('default/post.html.twig', array(
            'libro' => $libro,
        ));
    }
}
