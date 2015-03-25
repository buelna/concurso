<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'equipo_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipo/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipo_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipo/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipo_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipo/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipo_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipo/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipo_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipo/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipo_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\EquipoController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipo/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alumno/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/alumno/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/alumno/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/alumno/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/alumno/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alumno_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\AlumnoController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/alumno/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'concurso_estaticas_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inicio/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'concurso_estaticas_homepage',    'permanent' => true,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convocatoria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::convocatoriaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/convocatoria/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'programa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::programaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/programa/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ejemplos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::ejemplosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ejemplos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contactos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\EstaticasBundle\\Controller\\EstaticasController::contactosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contactos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\UsuarioController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Concurso\\RegistroBundle\\Controller\\UsuarioController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuarioNuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
