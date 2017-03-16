<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route(path="/formularios")
 */


class FormulariosController extends Controller
{
    /**
     * FormulariosController::indexAction()
     * 
     * @return
     * @Route(path="/index", name="formularios") 
     */
    public function indexAction(){
     
        return $this->render('FixServicemeBundle:Formularios:index.html.twig');
 
    }
    
}
