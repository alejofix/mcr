<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * Gestión General de Formularios Mejoramiento
 *
 * @Route(path="/formularios")
 */

class FormulariosController extends Controller
{

    /**
     * FormulariosController::indexAction()
     * 
     * @return
     * @Route(path="/index", name="inicioFormularios")
     * @Template("FixServicemeBundle:Formularios:index.html.twig")
     */
    public function indexAction()
    {
    
    }

    /**
     * FormulariosController::alertAction()
     * 
     * mensaje de confirmación <div class="alert alert-?">
     * 
     * @return null
     * @Route(path="/motivo/alert", name="alertFormularios")
     * @Template("FixServicemeBundle:Formularios:mensajes/alert.html.twig")
     */
    public function alertAction()
    {
    
    }


    /**
     * Redirecciona a la plantilla correspondiente
     *
     * @Route(path="/motivo/{id}", name="formularios_motivos", requirements={"id" = "\d+"})
     * @Method({"GET", "POST"})
     *
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function motivoAction(Request $request, $id) {

        $servicio = $this->get('serviceme.formularios.gestion');

        if($servicio->hasTemplate($id) == false) {
            $this->addFlash('mensajedanger', 'No existe el formulario solicitado.');
            return $this->redirectToRoute('alertFormularios');
        }

        $form = $servicio->createFormAction($id);
        $form->handleRequest($request);

        if($form->isSubmitted() AND $form->isValid()):

            dump($request->request->all(), $form->getData());
            die;
        endif;

        return $this->render($servicio->getTemplate($id), array('form' => $form->createView(), 'id' => $id));
    }

    /**
     * Genera la carga de los campos solicitados por ajax
     *
     * @Route(path="/ajax/form", name="formularios_ajax_field", condition="request.isXmlHttpRequest()")
     * @Template("FixServicemeBundle:Formularios:cargar_ajax_field.html.twig")
     * @Method({"POST"})
     *
     * @param Request $request
     * @return array
     */
    public function cargarAjaxFieldsAction(Request $request) {

        if($request->request->has('detalle') AND $request->request->has('id')) {
            $request->request->set('formulario', array('detalle' => $request->request->get('detalle')));

            $servicio = $this->get('serviceme.formularios.gestion');
            $form = $servicio->createFormAction($request->request->get('id'));
            $form->handleRequest($request);

            return array('form' => $form->createView(), 'id' => $request->request->get('id'), 'seleccion' => $request->request->get('detalle'));
        }
        else {
            throw $this->createNotFoundException('No es posible cargar su peticion');
        }
    }

    /**
     * Genera el formulario solicitado
     *
     * @param $entity
     * @param $id
     * @return \Symfony\Component\Form\Form
     */
    private function createNewFormularioForm($entity, $id) {

        switch ($id) {
            case 1:
                $clase = \Fix\ServicemeBundle\Form\Formularios\UnoType::class;
                break;
            case 2:
                $clase = \Fix\ServicemeBundle\Form\Formularios\DosType::class;
                break;
            case 3:
                $clase = \Fix\ServicemeBundle\Form\Formularios\TresType::class;
                break;
            case 4:
                $clase = \Fix\ServicemeBundle\Form\Formularios\CuatroType::class;
                break;
            case 5:
                $clase = \Fix\ServicemeBundle\Form\Formularios\CincoType::class;
                break;
            case 6:
                $clase = \Fix\ServicemeBundle\Form\Formularios\SeisType::class;
                break;
            case 7:
                $clase = \Fix\ServicemeBundle\Form\Formularios\SieteType::class;
                break;
            case 8:
                $clase = \Fix\ServicemeBundle\Form\Formularios\OchoType::class;
                break;
            case 9:
                $clase = \Fix\ServicemeBundle\Form\Formularios\NueveType::class;
                break;
            case 10:
                $clase = \Fix\ServicemeBundle\Form\Formularios\DiezType::class;
                break;
            case 11:
                $clase = \Fix\ServicemeBundle\Form\Formularios\OnceType::class;
                break;
            case 12:
                $clase = \Fix\ServicemeBundle\Form\Formularios\DoceType::class;
                break;
            case 13:
                $clase = \Fix\ServicemeBundle\Form\Formularios\TreceType::class;
                break;
            case 14:
                $clase = \Fix\ServicemeBundle\Form\Formularios\CatorceType::class;
                break;
            case 15:
                $clase = \Fix\ServicemeBundle\Form\Formularios\QuinceType::class;
                break;

        }


        return $this->createForm($clase, $entity, array(
            'action' => $this->generateUrl('formularios_motivos', array('id' => $id)),
            'method' => 'POST'
        ));
    }

    /**
     * @Route(path="/fix")
     */
    public function fixAction() {
        dump($this->getDoctrine()->getRepository('FixServicemeBundle:Formularios')->findByMotivoGroup());
        die;
    }

}