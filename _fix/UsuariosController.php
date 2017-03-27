<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use Fix\ServicemeBundle\Entity\Usuarios;

/**
 * @Route(path="serviceme/usuarios")
 */

class UsuariosController extends Controller
{

    /**
     * UsuariosController::indexAction()
     * 
     * @Route(path="/index", name="serviceme")
     */
    public function indexAction()
    {
       $fx = $this->getDoctrine()->getManager();
       $usuarios = $fx->getRepository('FixServicemeBundle:Usuarios')->findAll();
       
    /*
       $res = 'Lista de Usuarios: <br />';
       foreach($usuarios as $usuario)
       {
            $res .= 'Usuario : ' . $usuario->getUsuario() . ' - Correo: ' . $usuario->getCorreo() . '<br />';
       }   
       return new Response($res);
    */
        
        return $this->render('FixServicemeBundle:Usuarios:index.html.twig');
        
       
    }
    
    /**
     * UsuariosController::verAction()
     * 
     * @param mixed $id
     * @return usuarios
     * @Route(path="/ver/{id}", name="usuarios")
     */
    public function verAction(\Fix\ServicemeBundle\Entity\Usuarios  $usuario)
    {
        //$repository = $this->getDoctrine()->getRepository('FixServicemeBundle:Usuarios')->findOneById($id); 
       
        return new Response('Usuario : ' . $usuario->getUsuario() . ' - Correo: ' . $usuario->getCorreo() . '<br />');     
        
    }
    
    
}
