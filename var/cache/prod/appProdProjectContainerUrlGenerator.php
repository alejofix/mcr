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
        'indexComunicacion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ComunicacionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comunicacion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebaComunicacion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ComunicacionController::pruebaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comunicacion/dispositivo/prueba',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dahsboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inicioFormularios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formularios/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alertFormularios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::alertAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formularios/motivo/alert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'formularios_motivos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::motivoAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/formularios/motivo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'formularios_ajax_field' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::cargarAjaxFieldsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formularios/ajax/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fix_serviceme_formularios_fix' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::fixAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formularios/fix',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'indexFormularios' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ListaformulariosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/formularios/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fix_serviceme_listaformularios_fix' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ListaformulariosController::fixAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/formularios/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fix_serviceme_listaformularios_xls' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ListaformulariosController::xlsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/formularios/xls',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fix_serviceme_prueba_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\PruebaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prueba/prueba',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\SecurityController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\SecurityController::logOutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'indexServiceco' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicecoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/serviceco/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comunicarServiceco' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicecoController::comunicarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/serviceco/comunicar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicemeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mensajeError' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicemeController::errorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'indexUsuarios' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::indexAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/administracion/usuarios/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'agregarUsuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::agregarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/serviceme/administracion/usuarios/agregar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editarUsuario' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/administracion/usuarios/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'actualizarUsuario' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::createEditForm',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/administracion/usuarios/actualizar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'redireccion_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::actualizarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/administracion/usuarios/actualizar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'verUsuario' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::verAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/serviceme/administracion/usuarios/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
