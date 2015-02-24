<?php

namespace Concurso\EstaticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ConcursoEstaticasBundle:Default:index.html.twig', array('name' => $name));
    }
}
