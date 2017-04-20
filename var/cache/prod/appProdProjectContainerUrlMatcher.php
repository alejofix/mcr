<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // dahsboard
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahsboard');
            }

            return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dahsboard',);
        }

        if (0 === strpos($pathinfo, '/formularios')) {
            // formularios
            if (0 === strpos($pathinfo, '/formularios/index') && preg_match('#^/formularios/index/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formularios')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/formularios/formulario/proceso_')) {
                // formulario_1
                if ($pathinfo === '/formularios/formulario/proceso_1') {
                    return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::form1Action',  '_route' => 'formulario_1',);
                }

                // formulario_2
                if ($pathinfo === '/formularios/formulario/proceso_2') {
                    return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::form2Action',  '_route' => 'formulario_2',);
                }

            }

        }

        // fix_serviceme_prueba_index
        if ($pathinfo === '/prueba/prueba') {
            return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\PruebaController::indexAction',  '_route' => 'fix_serviceme_prueba_index',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\SecurityController::logOutAction',  '_route' => 'logout',);
            }

        }

        if (0 === strpos($pathinfo, '/serviceme')) {
            // inicio
            if ($pathinfo === '/serviceme/index') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicemeController::indexAction',  '_route' => 'inicio',);
            }

            // mensajeError
            if ($pathinfo === '/serviceme/error') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicemeController::errorAction',  '_route' => 'mensajeError',);
            }

            if (0 === strpos($pathinfo, '/serviceme/usuarios')) {
                // indexUsuarios
                if (0 === strpos($pathinfo, '/serviceme/usuarios/index') && preg_match('#^/serviceme/usuarios/index(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_indexUsuarios;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indexUsuarios')), array (  'page' => 1,  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::indexAction',));
                }
                not_indexUsuarios:

                // agregarUsuario
                if ($pathinfo === '/serviceme/usuarios/agregar') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_agregarUsuario;
                    }

                    return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::agregarAction',  '_route' => 'agregarUsuario',);
                }
                not_agregarUsuario:

                // editarUsuario
                if (0 === strpos($pathinfo, '/serviceme/usuarios/editar') && preg_match('#^/serviceme/usuarios/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarUsuario')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::editarAction',));
                }

                if (0 === strpos($pathinfo, '/serviceme/usuarios/actualizar')) {
                    // actualizarUsuario
                    if (preg_match('#^/serviceme/usuarios/actualizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('PUT', 'POST'))) {
                            $allow = array_merge($allow, array('PUT', 'POST'));
                            goto not_actualizarUsuario;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizarUsuario')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::createEditForm',));
                    }
                    not_actualizarUsuario:

                    // redireccion_editar
                    if (preg_match('#^/serviceme/usuarios/actualizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'redireccion_editar')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::actualizarAction',));
                    }

                }

                // verUsuario
                if (0 === strpos($pathinfo, '/serviceme/usuarios/ver') && preg_match('#^/serviceme/usuarios/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'verUsuario')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::verAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
