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
     * @Route(path="/index/{id}", name="formularios", requirements={"id" = "\d+"}) 
     */
    public function indexAction($id)
    {
    	
		if($id == 1) {
    		return $this->redirectToRoute('motivo_1');
    	}
    	elseif($id == 2) {
    		return $this->redirectToRoute('motivo_2');
    	}
     
        return $this->render('FixServicemeBundle:Formularios:index.html.twig');
 
    }
    
    /**
     * FormulariosController::form1Action()
     * @Route(path="/index/motivo_1", name="motivo_1")
     * @return void
     */
    public function motivo1Action() {


    }
    
    /**
     * FormulariosController::form2Action()
     * @Route(path="/index/motivo_2", name="motivo_2")
     * @return void
     */
    public function motivo2Action() {
    	
    }
       
}
