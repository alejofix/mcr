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

        if (0 === strpos($pathinfo, '/comunicacion')) {
            // indexComunicacion
            if (rtrim($pathinfo, '/') === '/comunicacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'indexComunicacion');
                }

                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ComunicacionController::indexAction',  '_route' => 'indexComunicacion',);
            }

            // pruebaComunicacion
            if ($pathinfo === '/comunicacion/dispositivo/prueba') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ComunicacionController::pruebaAction',  '_route' => 'pruebaComunicacion',);
            }

        }

        // dahsboard
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dahsboard');
            }

            return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dahsboard',);
        }

        if (0 === strpos($pathinfo, '/formularios')) {
            // inicioFormularios
            if ($pathinfo === '/formularios/index') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::indexAction',  '_route' => 'inicioFormularios',);
            }

            if (0 === strpos($pathinfo, '/formularios/motivo')) {
                // alertFormularios
                if ($pathinfo === '/formularios/motivo/alert') {
                    return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::alertAction',  '_route' => 'alertFormularios',);
                }

                // formularios_motivos
                if (preg_match('#^/formularios/motivo/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_formularios_motivos;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formularios_motivos')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::motivoAction',));
                }
                not_formularios_motivos:

            }

            // formularios_ajax_field
            if ($pathinfo === '/formularios/ajax/form' && $request->isXmlHttpRequest()) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formularios_ajax_field;
                }

                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::cargarAjaxFieldsAction',  '_route' => 'formularios_ajax_field',);
            }
            not_formularios_ajax_field:

            // fix_serviceme_formularios_fix
            if ($pathinfo === '/formularios/fix') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\FormulariosController::fixAction',  '_route' => 'fix_serviceme_formularios_fix',);
            }

        }

        if (0 === strpos($pathinfo, '/serviceme/formularios')) {
            // indexFormularios
            if (0 === strpos($pathinfo, '/serviceme/formularios/index') && preg_match('#^/serviceme/formularios/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'indexFormularios')), array (  'page' => 1,  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ListaformulariosController::indexAction',));
            }

            // fix_serviceme_listaformularios_fix
            if ($pathinfo === '/serviceme/formularios/test') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ListaformulariosController::fixAction',  '_route' => 'fix_serviceme_listaformularios_fix',);
            }

            // fix_serviceme_listaformularios_xls
            if ($pathinfo === '/serviceme/formularios/xls') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ListaformulariosController::xlsAction',  '_route' => 'fix_serviceme_listaformularios_xls',);
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
            if (0 === strpos($pathinfo, '/serviceme/serviceco')) {
                // indexServiceco
                if ($pathinfo === '/serviceme/serviceco/index') {
                    return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicecoController::indexAction',  '_route' => 'indexServiceco',);
                }

                // comunicarServiceco
                if ($pathinfo === '/serviceme/serviceco/comunicar') {
                    return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicecoController::comunicarAction',  '_route' => 'comunicarServiceco',);
                }

            }

            // inicio
            if ($pathinfo === '/serviceme/index') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicemeController::indexAction',  '_route' => 'inicio',);
            }

            // mensajeError
            if ($pathinfo === '/serviceme/error') {
                return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\ServicemeController::errorAction',  '_route' => 'mensajeError',);
            }

            if (0 === strpos($pathinfo, '/serviceme/administracion/usuarios')) {
                // indexUsuarios
                if (0 === strpos($pathinfo, '/serviceme/administracion/usuarios/index') && preg_match('#^/serviceme/administracion/usuarios/index(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_indexUsuarios;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'indexUsuarios')), array (  'page' => 1,  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::indexAction',));
                }
                not_indexUsuarios:

                // agregarUsuario
                if ($pathinfo === '/serviceme/administracion/usuarios/agregar') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_agregarUsuario;
                    }

                    return array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::agregarAction',  '_route' => 'agregarUsuario',);
                }
                not_agregarUsuario:

                // editarUsuario
                if (0 === strpos($pathinfo, '/serviceme/administracion/usuarios/editar') && preg_match('#^/serviceme/administracion/usuarios/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarUsuario')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::editarAction',));
                }

                if (0 === strpos($pathinfo, '/serviceme/administracion/usuarios/actualizar')) {
                    // actualizarUsuario
                    if (preg_match('#^/serviceme/administracion/usuarios/actualizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('PUT', 'POST'))) {
                            $allow = array_merge($allow, array('PUT', 'POST'));
                            goto not_actualizarUsuario;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizarUsuario')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::createEditForm',));
                    }
                    not_actualizarUsuario:

                    // redireccion_editar
                    if (preg_match('#^/serviceme/administracion/usuarios/actualizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'redireccion_editar')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::actualizarAction',));
                    }

                }

                // verUsuario
                if (0 === strpos($pathinfo, '/serviceme/administracion/usuarios/ver') && preg_match('#^/serviceme/administracion/usuarios/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'verUsuario')), array (  '_controller' => 'Fix\\ServicemeBundle\\Controller\\UsuariosController::verAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
