<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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
     * UsuariosController::agregarAction()
     * 
     * @Route(path="/agregar", name="agregarUsuario") 
     * @return
     */
    public function agregarAction()
    {
        $usuario = new Usuarios();
        $form = $this->createCreateForm($usuario);
        
        return $this->render('FixServicemeBundle:Usuarios:agregar.html.twig',  array('form' => $form->createView()));   
        
    }
    
    /**
     * UsuariosController::createCreateForm()
     * 
     * @param mixed $entity
     * @return void
     * @Method({"GET", "POST"})  
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
     * UsuariosController::crearAction()
     * 
     * @param mixed $request
     * @return
     * @Route(path="/crear", name="crearUsuario")

     */
    public function crearAction(Request $request)
    {
        $usuario = new Usuarios();
        $form = $this->createCreateForm($usuario);
        $form->handleRequest($request);
        
            $contrasena = $form->get('contrasena')->getData();
            
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($usuario, $contrasena);
            
            $usuario->setContrasena($encoded);       
        
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            
            return $this->redirectToRoute('indexUsuarios');
        }
        
        return $this->render('FixServicemeBundle:Usuarios:agregar.html.twig',  array('form' => $form->createView()));
        
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
