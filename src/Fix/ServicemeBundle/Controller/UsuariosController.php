<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use \Fix\ServicemeBundle\Entity\Usuarios;
use \Fix\ServicemeBundle\Form\UsuariosType;

/**
 * @Route(path="serviceme/administracion/usuarios")
 */

class UsuariosController extends Controller
{

    /**
     * UsuariosController::indexAction()
     * 
     * @Route(path="/index/{page}", name="indexUsuarios", requirements={"page" = "\d+"}, defaults={"page" = 1})
     * @Template("FixServicemeBundle:Usuarios:index.html.twig")
     * @Method({"GET"})
     * 
     * @author alejo_fix@hotmail.com
     */
    public function indexAction(Request $request, $page = 1) {
		
		$em = $this->getDoctrine()->getManager();
		
		$paginator = $this->get('knp_paginator');
		$paginacion = $paginator->paginate(
			$em->getRepository('Fix\ServicemeBundle\Entity\Usuarios')->findBy([], ['fechaCreado' => 'DESC']),
			$page,
			8
		);
		
		return array('pagination' => $paginacion);
    }
    
    /**
     * UsuariosController::agregarAction()
     * 
     * Genera un nuevo usuario dentro de la base de datos
     * 
     * @Route(path="/agregar", name="agregarUsuario")
     * @Template("FixServicemeBundle:Usuarios:agregar.html.twig")
	 * @Method({"GET", "POST"})
	 * 
     * @return object
     */
    public function agregarAction(Request $request)
    {
        $usuario = new Usuarios();
        $form = $this->createCreateForm($usuario);
        $form->handleRequest($request);
        
        if($form->isSubmitted() == true AND $form->isValid() == true) {
        	
        	$encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($usuario, $form->get('contrasena')->getData());
            $usuario->setContrasena($encoded);
        	
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($usuario);
        	$em->flush();
        	
        	$this->addFlash('mensajelogrado', 'Usuario Creado... No sabe lo que le Espera.');
            return $this->redirectToRoute('agregarUsuario');
        }
        
        return array('form' => $form->createView());
    }
    
    /**
     * UsuariosController::createCreateForm()
     * 
     * Crea el formulario correspondiente
     * 
     * @param mixed $entity
     * @return object
     */
    private function createCreateForm(Usuarios $entity) {
    	
        return $this->createForm(UsuariosType::class, $entity, array(
            'action' => $this->generateUrl('agregarUsuario'),
            'method' => 'POST'
        ));
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
           // throw $this->createNotFoundException('Usuario Inexistente o Exterminado');
           $this->addFlash('mensajeerror', 'Usuario Inexistente o Exterminado.');
           return $this->redirectToRoute('mensajeError');
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
           // throw $this->createNotFoundException('Usuario Inexistente o Exterminado');
           $this->addFlash('mensajeerror', 'Usuario Inexistente o Exterminado.');
           return $this->redirectToRoute('mensajeError');
        }
        
        $form = $this->createEditForm($usuario);
        
        $form->handleRequest($request);
        
         if($form->isSubmitted() && $form->isValid())
         {
            
            $em->flush();
            $this->addFlash('mensajelogrado', 'Usuario Actualizado... Información inyectada.');
            
            return $this->redirectToRoute('editarUsuario', array('id' => $usuario->getId()));
            
         }
        
        return $this->render('FixServicemeBundle:Usuarios:editar.html.twig', 
            array('usuario' => $usuario, 'form' => $form->createView()));
            
    }
    
    /**
     * UsuariosController::verAction()
     *
     * Vista detalle Usuario por ID
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
           // throw $this->createNotFoundException('Usuario Inexistente o Exterminado');
           $this->addFlash('mensajeerror', 'Usuario Inexistente o Exterminado.');
           return $this->redirectToRoute('mensajeError');
        }
       
        //return new Response('Usuario : ' . $usuario->getUsuario() . ' - Correo: ' . $usuario->getCorreo() . '<br />');
        return $this->render('FixServicemeBundle:Usuarios:ver.html.twig', array('usuario' => $usuario));
    }
    
    
}
