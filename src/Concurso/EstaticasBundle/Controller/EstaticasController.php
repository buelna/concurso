<?php

namespace Concurso\EstaticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EstaticasController extends Controller
{
    public function indexAction()
    {
        return $this->render('ConcursoEstaticasBundle:Default:index.html.twig', array());
    }
}