<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PruebaController extends Controller
{
	/**
	 * PruebaController::indexAction()
	 * 
	 * @Route(path="/prueba/prueba")
	 * @return void
	 */
	public function indexAction() {
		
		$texto = $this->get('compadre.texto');
        
        dump($texto->getTexto());
        die;
	}
}
