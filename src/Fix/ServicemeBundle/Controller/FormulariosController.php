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
    		return $this->redirectToRoute('formulario_1');
    	}
    	elseif($id == 2) {
    		return $this->redirectToRoute('formulario_2');
    	}
     
        return $this->render('FixServicemeBundle:Formularios:index.html.twig');
 
    }
    
    /**
     * FormulariosController::form1Action()
     * @Route(path="/formulario/proceso_1", name="formulario_1")
     * @return void
     */
    public function form1Action() {
    	
    }
    
    /**
     * FormulariosController::form2Action()
     * @Route(path="/formulario/proceso_2", name="formulario_2")
     * @return void
     */
    public function form2Action() {
    	
    }
       
}
