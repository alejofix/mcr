<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route(path="serviceme/guiones")
 */

class GuionesController extends Controller
{

    /**
     * GuionesController::copiarAction()
     *
     * @return
     * @Route(path="/copiar", name="copiarGuion")
     * @Template("FixServicemeBundle:Guiones:copiar.html.twig")
     */
    public function copiarAction()
    {


    }

    /**
     * GuionesController::plataformadiagnosticadorAction()
     *
     * @return
     * @Route(path="/plataforma/diagnosticador", name="plataformaDiagnosticador")
     * @Template("FixServicemeBundle:Guiones:Plataforma/diagnosticador.html.twig")
     */
    public function plataformadiagnosticadorAction()
    {

    }

    /**
     * GuionesController::plataformageneralesAction()
     *
     * @return
     * @Route(path="/plataforma/generales", name="plataformaGenerales")
     * @Template("FixServicemeBundle:Guiones:Plataforma/generales.html.twig")
     */
    public function plataformageneralesAction()
    {

    }

    /**
     * GuionesController::plataformainternetAction()
     *
     * @return
     * @Route(path="/plataforma/internet", name="plataformaInternet")
     * @Template("FixServicemeBundle:Guiones:Plataforma/internet.html.twig")
     */
    public function plataformainternetAction()
    {

    }

    /**
     * GuionesController::plataformatelevisionAction()
     *
     * @return
     * @Route(path="/plataforma/television", name="plataformaTelevision")
     * @Template("FixServicemeBundle:Guiones:Plataforma/television.html.twig")
     */
    public function plataformatelevisionAction()
    {

    }

    /**
     * GuionesController::plataformatelefoniaAction()
     *
     * @return
     * @Route(path="/plataforma/telefonia", name="plataformaTelefonia")
     * @Template("FixServicemeBundle:Guiones:Plataforma/telefonia.html.twig")
     */
    public function plataformatelefoniaAction()
    {

    }





}
