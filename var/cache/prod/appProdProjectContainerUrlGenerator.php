<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'dahsboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'formularios' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::indexAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/formularios/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'formulario_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::form1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formularios/formulario/proceso_1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'formulario_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::form2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formularios/formulario/proceso_2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fix_serviceme_prueba_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\PruebaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prueba/prueba',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\SecurityController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\SecurityController::logOutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicemeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mensajeError' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicemeController::errorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'indexUsuarios' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::indexAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/usuarios/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'agregarUsuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::agregarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/usuarios/agregar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editarUsuario' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/usuarios/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'actualizarUsuario' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::createEditForm',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/usuarios/actualizar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'redireccion_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::actualizarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/usuarios/actualizar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'verUsuario' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::verAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/usuarios/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
