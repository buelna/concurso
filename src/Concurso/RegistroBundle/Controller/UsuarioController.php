<?php

namespace Concurso\RegistroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Concurso\RegistroBundle\Entity\Usuario;
use Concurso\RegistroBundle\Form\UsuarioType;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class UsuarioController extends Controller
{
    public function loginAction(Request $request)
    {
         $session = $request->getSession();
 
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
 

        return $this->render('ConcursoEstaticasBundle:Default:login.html.twig',
            array(
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );

    }

    /**
     * Displays a form to create a new Miembro entity.
     *
     * @Route("/new", name="usuario_new")
     * @Method("GET")
     * @Template("ConcursoEstaticasBundle:Default:nuevoUsuario.html.twig")
     */
    public function newAction(Request $peticion)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario = new Usuario();
        
        $formulario = $this->createForm(new UsuarioType(), $usuario);

        $formulario->handleRequest($peticion);

        if ($formulario->isValid()) {
            $usuario->setSalt(md5(time()));

            $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
            $passwordCodificado = $encoder->encodePassword(
                $usuario->getPassword(),
                $usuario->getSalt()
            );
            $usuario->setPassword($passwordCodificado);

            $em->persist($usuario);
            $em->flush();

            $token = new UsernamePasswordToken($usuario, null, 'usuarios', $usuario->getRoles());
            $this->container->get('security.context')->setToken($token);

            return $this->redirect($this->generateUrl('registro', array()));
        }

        return $this->render('ConcursoEstaticasBundle:Default:nuevoUsuario.html.twig', array(
            'form' => $formulario->createView()
        ));
    }
}



