<?php

namespace Concurso\EstaticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EstaticasController extends Controller
{
    public function indexAction()
    {
        return $this->render('ConcursoEstaticasBundle:Default:index.html.twig', array());
    }
    public function convocatoriaAction()
    {
        return $this->render('ConcursoEstaticasBundle:Default:convocatoria.html.twig', array());
    }
    public function programaAction()
    {
        return $this->render('ConcursoEstaticasBundle:Default:programa.html.twig', array());
    }
    public function ejemplosAction()
    {
        return $this->render('ConcursoEstaticasBundle:Default:ejemplos.html.twig', array());
    }
    public function registroAction()
    {
        return $this->render('ConcursoEstaticasBundle:Default:registro.html.twig', array());
    }
    public function contactosAction()
    {
        return $this->render('ConcursoEstaticasBundle:Default:contactos.html.twig', array());
    }
}