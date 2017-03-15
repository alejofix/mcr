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
     * @return void
     * @Route(path="/index", name="serviceme")
     */
    public function indexAction(){
        
       return $this->render('FixServicemeBundle:Serviceme:index.html.twig');
   
    }
    
}
