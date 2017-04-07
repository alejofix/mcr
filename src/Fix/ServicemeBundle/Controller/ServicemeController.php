<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
     */
    public function indexAction()
    {
        
       return $this->render('FixServicemeBundle:Serviceme:index.html.twig');
   
    }
    
    
    /**
     * ServicemeController::errorAction()
     * 
     * @return
     * @Route(path="/error", name="mensajeError")
     */
    public function errorAction()
    {
       
       return $this->render('FixServicemeBundle:Serviceme:error.html.twig'); 
        
    }
    
    	
}
