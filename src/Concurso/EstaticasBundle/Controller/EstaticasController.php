<?php

namespace Concurso\EstaticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    public function registroAction(Request $peticion)
    {
        $usuario = $this->get('security.context')->getToken()->getUser();
        return $this->render('ConcursoEstaticasBundle:Default:registro.html.twig', array(
                'usuario' => $usuario
            ));
    }
    public function contactosAction()
    {
        return $this->render('ConcursoEstaticasBundle:Default:contactos.html.twig', array());
    }
    
}