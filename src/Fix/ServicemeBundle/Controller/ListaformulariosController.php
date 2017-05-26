<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Listas Generales Formularios Mejoramiento
 *
 * @Route(path="serviceme/formularios")
 */


class ListaformulariosController extends Controller
{

    /**
     * ListaformulariosController::listaAction
     *
     *
     * @return
     * @Route(path="/lista", name="listaFormularios")
     * @Template("FixServicemeBundle:Formularios:lista.html.twig")
     */
    public function listaAction()
    {



    }
}
