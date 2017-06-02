<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route(path="/comunicacion")
 */


class ComunicacionController extends Controller
{

    /**
     * ServicemeController::indexAction()
     *
     * @return
     * @Route(path="/", name="indexComunicacion")
     * @Template("FixServicemeBundle:Comunicacion:index.html.twig")
     */
    public function indexAction()
    {


    }

    /**
     * ServicemeController::pruebaAction()
     *
     * @return
     * @Route(path="/dispositivo/prueba", name="pruebaComunicacion")
     * @Template("FixServicemeBundle:Comunicacion:Dispositivo/prueba.html.twig")
     */
    public function pruebaAction()
    {


    }

}
