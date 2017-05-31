<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route(path="/serviceme")
 */

class ServicemeController extends Controller
{
    
    /**
     * ServicemeController::indexAction()
     * 
     * @return
     * @Route(path="/index", name="inicio")
     * @Template("FixServicemeBundle:Serviceme:index.html.twig")
     */
    public function indexAction()
    {
        

    }
    
    
    /**
     * ServicemeController::errorAction()
     * 
     * @return
     * @Route(path="/error", name="mensajeError")
     * @Template("FixServicemeBundle:Serviceme:error.html.twig")
     */
    public function errorAction()
    {
       

    }
    
    	
}
