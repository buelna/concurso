<?php


namespace Concurso\RegistroBundle\Listener;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;


class LoginListener
{
    private $contexto, $router;

    public function __construct(Router $router)
    {
        //$this->contexto = $context;
        $this->router   = $router;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $token = $event->getAuthenticationToken();
        //$this->ciudad = $token->getUser()->getCiudad()->getSlug();
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        
            $portada = $this->router->generate('registro');
            
            $event->setResponse(new RedirectResponse($portada));
            $event->stopPropagation();
        
    }
}
