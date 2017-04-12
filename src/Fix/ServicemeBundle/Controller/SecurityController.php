<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;


class SecurityController extends Controller
{
    /**
     * SecurityController::loginAction()
     * 
     * @return
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $lastUsuario = $authenticationUtils->getLastUsuario();
        
        return $this->render('FixServicemeBundle:Security:login.html.twig', 
            array('last_usuario' => $lastUsuario, 'error' => $error));
        
    }
    
    /**
     * SecurityController::loginCheckAction()
     * 
     * @return void
     */
    public function loginCheckAction()
    {
        
        
    }
    
}
