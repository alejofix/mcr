<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use Fix\ServicemeBundle\Entity\Usuarios;

/**
 * @Route(path="/usuarios")
 */

class UsuariosController extends Controller
{
    

    /**
     * UsuariosController::indexAction()
     * 
     * @return void
     * @Route(path="/index", name="usuarios")
     */
    public function indexAction()
    {
        
       $fx = $this->getDoctrine()->getManager();
       $usuarios = $fx->getRepository('FixServicemeBundle:Usuarios')->findAll();
       
       $res = 'Lista de Usuarios: <br />';
       
       foreach($usuarios as $usuario)
       {
            $res .= 'Usuario : ' . $usuario->getUsuario() . ' - Correo: ' . $usuario->getCorreo() . '<br />';
       }   
       
       return new Response($res);
    }
}
