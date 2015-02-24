<?php

namespace Concurso\RegistroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RegistroBundle:Default:index.html.twig', array('name' => $name));
    }
}
