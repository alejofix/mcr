<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * ServiceCo comunicación y administración
 *
 * @Route(path="serviceme/serviceco")
 */

class ServicecoController extends Controller
{


    /**
     * ServicecoController::indexAction
     *
     * @return
     * @Route(path="/index", name="indexServiceco")
     * @Template("FixServicemeBundle:Serviceco:index.html.twig")
     *
     */
    public function  indexAction(){


    }

    /**
     * ServicecoController::comunicarAction
     *
     * @return
     * @Route(path="/comunicar", name="comunicarServiceco")
     * @Template("FixServicemeBundle:Serviceco:comunicar.html.twig")
     *
     */
    public function comunicarAction(){


    }

}
