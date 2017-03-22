<?php

namespace Principal\BibliotecaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PrincipalBibliotecaBundle:Default:index.html.twig');
    }
}
