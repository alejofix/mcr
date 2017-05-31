<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use \Fix\ServicemeBundle\Entity\Formularios;
use \Fix\ServicemeBundle\Form\FormulariosType;

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
     * @return
     * @Route(path="/lista/{page}", name="listaFormularios"), requirements={"page" = "\d+"}, defaults={"page" = 1}
     * @Template("FixServicemeBundle:Formularios:lista.html.twig")
     */
    public function listaAction(Request $request, $page = 1)
    {
        $em = $this->getDoctrine()->getManager();

        $paginator = $this->get('knp_paginator');
        $paginacion = $paginator->paginate(
            $em->getRepository('Fix\ServicemeBundle\Entity\Formularios')->findBy([], ['fecha' => 'DESC']),
            $page,
            9
        );

        return array('pagination' => $paginacion);

    }
}
