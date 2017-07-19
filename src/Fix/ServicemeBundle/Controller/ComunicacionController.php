<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;

/**
 * @Route(path="/comunicacion")
 */


class ComunicacionController extends Controller
{

    /**
     * ServicemeController::indexAction()
     *
     * @return
     * @Route(path="/index", name="indexComunicacion")
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
    public function pruebaAction(Request $request, $page = 1)
    {

        $em = $this->getDoctrine()->getManager();

        $paginator = $this->get('knp_paginator');
        $paginacion = $paginator->paginate(
            $em->getRepository('Fix\ServicemeBundle\Entity\Serviceco')->findBy(['estado' => '1'], ['referencia' => 'ASC']),
            $page
        );

        return array('pagination' => $paginacion);

    }

}
