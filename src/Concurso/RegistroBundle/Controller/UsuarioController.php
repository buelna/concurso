<?php

namespace Concurso\RegistroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class UsuarioController extends Controller
{
    public function loginAction()
	{
		$peticion = $this->getRequest();
		$sesion = $peticion->getSession();
		$error = $peticion->attributes->get(
			SecurityContext::AUTHENTICATION_ERROR,
			$sesion->get(SecurityContext::AUTHENTICATION_ERROR)
		);
		return $this->render('RegistroBundle:Default:login.html.twig', array(
			'email' => $sesion->get(SecurityContext::EMAIL),
			'error'	=> $error
		));
	}
}
