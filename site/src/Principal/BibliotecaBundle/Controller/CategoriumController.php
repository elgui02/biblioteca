<?php

namespace Principal\BibliotecaBundle\Controller;

use Principal\BibliotecaBundle\Entity\Categorium;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Categorium controller.
 *
 * @Route("categoria")
 */
class CategoriumController extends Controller
{
    /**
     * Lists all categorium entities.
     *
     * @Route("/", name="categoria_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categoria = $em->getRepository('PrincipalBibliotecaBundle:Categorium')->findAll();

        return $this->render('categorium/index.html.twig', array(
            'categoria' => $categoria,
        ));
    }

    /**
     * Finds and displays a categorium entity.
     *
     * @Route("/{id}", name="categoria_show")
     * @Method("GET")
     */
    public function showAction(Categorium $categorium)
    {

        return $this->render('categorium/show.html.twig', array(
            'categorium' => $categorium,
        ));
    }
}
