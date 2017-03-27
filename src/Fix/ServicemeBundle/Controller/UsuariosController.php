<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use \Fix\ServicemeBundle\Entity\Usuarios;
use \Fix\ServicemeBundle\Form\UsuariosType;

/**
 * @Route(path="serviceme/usuarios")
 */

class UsuariosController extends Controller
{

    /**
     * UsuariosController::indexAction()
     * 
     * @Route(path="/index", name="indexUsuarios")
     */
    public function indexAction()
    {
       $em = $this->getDoctrine()->getManager();
       $usuarios = $em->getRepository('FixServicemeBundle:Usuarios')->findAll();
       
    /*
       $res = 'Lista de Usuarios: <br />';
       foreach($usuarios as $usuario)
       {
            $res .= 'Usuario : ' . $usuario->getUsuario() . ' - Correo: ' . $usuario->getCorreo() . '<br />';
       }   
       return new Response($res);
    */
        return $this->render('FixServicemeBundle:Usuarios:index.html.twig', array('usuarios' => $usuarios));
    }
    
    /**
     * UsuariosController::nuevoAction()
     * 
     * @Route(path="/nuevo", name="nuevoUsuario") 
     * @return
     */
    public function nuevoAction()
    {
        $usuario = new Usuarios();
        $form = $this->createCreateForm($usuario);
        
        return $this->render('FixServicemeBundle:Usuarios:nuevo.html.twig',  array('form' => $form->createView()));   
        
    }
    
    /**
     * UsuariosController::createCreateForm()
     * 
     * @param mixed $entity
     * @return void
     * @Route(path="/crear", name="crearUsuario")
     */
    private function createCreateForm(Usuarios $entity)
    {
        $form = $this->createForm(UsuariosType::class, $entity, array(
            'action' => $this->generateUrl('crearUsuario'),
            'method' => 'POST'
        ));
        
        return $form;       
    }
    
    
    /**
     * UsuariosController::verAction()
     * 
     * @param mixed $id
     * @return usuarios
     * @Route(path="/ver/{id}", name="verUsuario")
     */
    public function verAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('FixServicemeBundle:Usuarios');
       
        $usuario = $repository->find($id);
        //$usuario = $repository->findOneById($id); 
       
        return new Response('Usuario : ' . $usuario->getUsuario() . ' - Correo: ' . $usuario->getCorreo() . '<br />');     
        
    }
    
    
}
