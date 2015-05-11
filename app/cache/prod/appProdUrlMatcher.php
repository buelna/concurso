<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/equipo')) {
            // equipo_new
            if ($pathinfo === '/equipo/new') {
                return array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::newAction',  '_route' => 'equipo_new',);
            }

            // equipo_edit
            if (0 === strpos($pathinfo, '/equipo/edit') && preg_match('#^/equipo/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_edit')), array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::editAction',));
            }

            // equipo_show
            if (0 === strpos($pathinfo, '/equipo/show') && preg_match('#^/equipo/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_show')), array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::showAction',));
            }

            // equipo_create
            if ($pathinfo === '/equipo/create') {
                return array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::createAction',  '_route' => 'equipo_create',);
            }

            // equipo_update
            if (0 === strpos($pathinfo, '/equipo/update') && preg_match('#^/equipo/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_update')), array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::updateAction',));
            }

            // equipo_delete
            if (0 === strpos($pathinfo, '/equipo/delete') && preg_match('#^/equipo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_delete')), array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/alumno')) {
            // alumno_new
            if ($pathinfo === '/alumno/new') {
                return array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::newAction',  '_route' => 'alumno_new',);
            }

            // alumno_edit
            if (0 === strpos($pathinfo, '/alumno/edit') && preg_match('#^/alumno/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_edit')), array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::editAction',));
            }

            // alumno_show
            if (0 === strpos($pathinfo, '/alumno/show') && preg_match('#^/alumno/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_show')), array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::showAction',));
            }

            // alumno_create
            if ($pathinfo === '/alumno/create') {
                return array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::createAction',  '_route' => 'alumno_create',);
            }

            // alumno_update
            if (0 === strpos($pathinfo, '/alumno/update') && preg_match('#^/alumno/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_update')), array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::updateAction',));
            }

            // alumno_delete
            if (0 === strpos($pathinfo, '/alumno/delete') && preg_match('#^/alumno/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno_delete')), array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::deleteAction',));
            }

        }

        // concurso_estaticas_homepage
        if (rtrim($pathinfo, '/') === '/inicio') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'concurso_estaticas_homepage');
            }

            return array (  '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::indexAction',  '_route' => 'concurso_estaticas_homepage',);
        }

        // inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'inicio');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'concurso_estaticas_homepage',  'permanent' => true,  '_route' => 'inicio',);
        }

        // convocatoria
        if (rtrim($pathinfo, '/') === '/convocatoria') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'convocatoria');
            }

            return array (  '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::convocatoriaAction',  '_route' => 'convocatoria',);
        }

        // programa
        if (rtrim($pathinfo, '/') === '/programa') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'programa');
            }

            return array (  '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::programaAction',  '_route' => 'programa',);
        }

        // ejemplos
        if (rtrim($pathinfo, '/') === '/ejemplos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ejemplos');
            }

            return array (  '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::ejemplosAction',  '_route' => 'ejemplos',);
        }

        // registro
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::registroAction',  '_route' => 'registro',);
        }

        // galeria
        if ($pathinfo === '/galeria') {
            return array (  '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::galeriaAction',  '_route' => 'galeria',);
        }

        // contactos
        if (rtrim($pathinfo, '/') === '/contactos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'contactos');
            }

            return array (  '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::contactosAction',  '_route' => 'contactos',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if (rtrim($pathinfo, '/') === '/login') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'login');
                    }

                    return array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\UsuarioController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // usuario_new
        if ($pathinfo === '/usuarioNuevo') {
            return array (  '_controller' => 'Concurso\\RegistroBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
