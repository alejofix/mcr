<?php

namespace Fix\ServicemeBundle\Controller;


use Fix\ServicemeBundle\Entity\Serviceco;
use Fix\ServicemeBundle\Form\ServicecoType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * ServiceCo comunicación y administración
 *
 * @Route(path="serviceme/serviceco")
 */

class ServicecoController extends Controller
{


    /**
     * ServicecoController::indexAction
     *
     * @return
     * @Route(path="/index/{page}", name="indexServiceco", requirements={"page" = "\d+"}, defaults={"page" = 1})
     * @Template("FixServicemeBundle:Serviceco:index.html.twig")
     * @Method({"GET"})
     *
     */
    public function  indexAction(Request $request, $page = 1){

        $em = $this->getDoctrine()->getManager();
        $paginator = $this->get('knp_paginator');
        $paginacion = $paginator->paginate(
            $em->getRepository('Fix\ServicemeBundle\Entity\Serviceco')->findBy([]),
            $page,
            8
        );

        return array('pagination' => $paginacion);

    }


    /**
     * ServicecoController::editarAction()
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route(path="/editar/{id}", name="editarAviso")
     */
    public function editar($id){

        $em = $this->getDoctrine()->getManager();
        $aviso = $em->getRepository('FixServicemeBundle:Serviceco')->find($id);

        if(!$aviso){

            $this->addFlash('mensajeerror', 'Aviso Inexistente o Exterminado.');
            return $this->redirectToRoute('mensajeError');
        }

        $form = $this->createEditForm($aviso);

        return $this->render('FixServicemeBundle:Serviceco:editar.html.twig', array('aviso' => $aviso, 'form' => $form->createView()));

    }

    /**
     * ServicecoController::createEditForm()
     *
     * @param mixed $entity
     * @return void
     * @Route(path="/actualizar/{id}", name="actualizarAviso")
     * @Method({"PUT", "POST"})
     */
    private function createEditForm(Serviceco $entity){

        $form = $this->createForm(ServicecoType::class, $entity, array
        ('action' => $this->generateUrl('actualizarAviso', array('id' => $entity->getId())), 'method' => 'PUT'));

        return $form;
    }



    /**
     * ServicecoController::actualizarAction()
     *
     * @return void
     * @Route(path="/actualizar/{id}", name="redireccioneditar")
     */
    public function actualizarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $aviso = $em->getRepository('FixServicemeBundle:Serviceco')->find($id);

        if(!$aviso)
        {
            $this->addFlash('mensajeerror', 'Usuario Inexistente o Exterminado.');
            return $this->redirectToRoute('mensajeError');
        }

        $form = $this->createEditForm(FixServicemeBundleServiceco::class, $em);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            $this->addFlash('mensajelogrado', 'Aviso Actualizado... Información inyectada.');

            return $this->redirectToRoute('editarAviso', array('id' => $aviso->getId()));
        }

        return $this->render('FixServicemeBundle:Serviceco:editar.html.twig',
            array('aviso' => $aviso, 'form' => $form->createView()));
    }



    /**
     * ServicecoController::comunicarAction
     *
     * Genera un Aviso Alto Impacto dentro de la Base de Datos
     *
     * @return
     * @Route(path="/comunicar", name="comunicarServiceco")
     * @Template("FixServicemeBundle:Serviceco:comunicar.html.twig")
     * @Method({"GET", "POST"})
     *
     * @return object
     */
    public function comunicarAction(Request $request){
        
        $serviceco = new Serviceco();
        $form = $this->createCreateForm($serviceco);
        $form->handleRequest($request);

        if($form->isSubmitted() AND $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $serviceco->setEstado($em->getRepository('FixServicemeBundle:Estados')->findOneBy(array('id' => 1)));
            $serviceco->setUsuario($this->getUser());
            $em->persist($serviceco);
            $em->flush();

      //    throw $this->createNotFoundException('error');
            $this->addFlash('mensajelogrado', 'Aviso Alto impacto Comunicado con Éxito… «Gracias».');
            return $this->redirectToRoute('comunicarServiceco');
        }

        return array('form' => $form->createView());

    }

    /**
     * ServicecoController::createCreateForm()
     *
     * Crea el formulario correspondiente
     *
     * @param mixed $entity
     * @return object
     */
    private function createCreateForm(Serviceco $entity) {
        return $this->createForm(ServicecoType::class, $entity, array(
            'action' => $this->generateUrl('comunicarServiceco'),
            'method' => 'POST'
        ));

    }


}
