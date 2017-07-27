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
     * @Route(path="/copiar", name="copiar")
     * @Template("FixServicemeBundle:Guiones:copiar.html.twig")
     */
    public function copiarAction()
    {


    }

}
