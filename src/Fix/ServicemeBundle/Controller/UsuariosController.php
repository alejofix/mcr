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
     * @author alejo_fix@hotmail.com
     */
    public function indexAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();
       #$usuarios = $em->getRepository('FixServicemeBundle:Usuarios')->findAll();
       
    /*
       $res = 'Lista de Usuarios: <br />';
       foreach($usuarios as $usuario)
       {
            $res .= 'Usuario : ' . $usuario->getUsuario() . ' - Correo: ' . $usuario->getCorreo() . '<br />';
       }   
       return new Response($res);
    */
    
        $dql   = "SELECT u FROM FixServicemeBundle:Usuarios u";
        $usuarios = $em->createQuery($dql);
    
        
        $paginator = $this->get('knp_paginator');
        
        $pagination = $paginator->paginate(
        
            $usuarios, $request->query->getInt('page', 1),
            6
        );
    
        return $this->render('FixServicemeBundle:Usuarios:index.html.twig', array('pagination' => $pagination));
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
            
            #$successMessage = $this->get('translator')->trans('The user has been created.');
            #$this->addFlash('mensajecreado', $successMessage);
            $this->addFlash('mensajecreado', 'Usuario Creado... No sabe lo que le Espera.');
            
            return $this->redirectToRoute('indexUsuarios');
        }
        
        return $this->render('FixServicemeBundle:Usuarios:agregar.html.twig',  array('form' => $form->createView()));
        
    }
    
    /**
     * UsuariosController::editarAction()
     * 
     * @param mixed $id
     * @return void
     * @Route(path="/editar/{id}", name="editarUsuario")
     */
    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $usuario = $em->getRepository('FixServicemeBundle:Usuarios')->find($id);
        
        if(!$usuario)
        {
           throw $this->createNotFoundException('Usuario Inexistente o Exterminado');
        }
        
        $form = $this->createEditForm($usuario);
        
        return $this->render('FixServicemeBundle:Usuarios:editar.html.twig', array('usuario' => $usuario, 'form' => $form->createView()));

    }
    
    /**
     * UsuariosController::createEditForm()
     * 
     * @param mixed $entity
     * @return void
     * @Route(path="/actualizar/{id}", name="actualizarUsuario")
     * @Method({"PUT", "POST"})
     */
    private function createEditForm(Usuarios $entity)
    {
        $form = $this->createForm(UsuariosType::class, $entity, array
            ('action' => $this->generateUrl('actualizarUsuario', array('id' => $entity->getId())), 'method' => 'PUT'));
            
            return $form; 
        
    }
    
    /**
     * UsuariosController::actualizarAction()
     * 
     * @return void
     * @Route(path="/actualizar/{id}", name="redireccion_editar")
     */
    public function actualizarAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $usuario = $em->getRepository('FixServicemeBundle:Usuario')->find($id);   
        
        if(!$usuario)
        {
           throw $this->createNotFoundException('Usuario Inexistente o Exterminado');
        }
        
        $form = $this->createEditForm($usuario);
        
        $form->handleRequest($request);
        
         if($form->isSubmitted() && $form->isValid())
         {
            
            $em->flush();
            $this->addFlash('mensajecreado', 'Usuario Actualizado... Información inyectada.');
            
            return $this->redirectToRoute('editarUsuario', array('id' => $usuario->getId()));
            
         }
        
        return $this->render('FixServicemeBundle:Usuarios:editar.html.twig', 
            array('usuario' => $usuario, 'form' => $form->createView()));
            
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
        
        if(!$usuario)
        {
           throw $this->createNotFoundException('Usuario Inexistente o Exterminado');
        }
       
        return new Response('Usuario : ' . $usuario->getUsuario() . ' - Correo: ' . $usuario->getCorreo() . '<br />');
        
    }
    
    
}
