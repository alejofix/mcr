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

        $servicio = $this->get('serviceme.formularios.gestion')->setMotivo($id);

        if($servicio->hasTemplate() == false) {
            $this->addFlash('mensajedanger', 'No existe el formulario solicitado.');
            return $this->redirectToRoute('alertFormularios');
        }

        $form = $servicio->createFormAction();
        $form->handleRequest($request);

        if($form->isSubmitted() AND $form->isValid()):

            $servicio->execute();

            if($id == '13'){
                $error = array();
                $lista = array('informacionuno', 'informaciondos', 'informaciontres');

                foreach ($lista AS $value) {
                    if($form->get($value)->getData() == 'NO') {
                        $error[] = 'NO';
                    }
                }
                if(count($error)>0) {
                    $this->addFlash('errorevidente', 'Informa al cliente que no es posible continuar con el proceso ya que alguna respuesta no es correcta.');
                }
                else {
                    $this->addFlash('successevidente', 'El cliente ha respondido correctamente, continua con el Proceso.');
                }

                return $this->redirectToRoute('alertFormularios');
            }

            $this->addFlash('mensajesuccess', 'Información almacenada con éxito… «Gracias»..');
            return $this->redirectToRoute('alertFormularios');
        endif;

        return $this->render($servicio->getTemplate(), array('form' => $form->createView(), 'id' => $id));
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

            $servicio = $this->get('serviceme.formularios.gestion')->setMotivo($request->request->get('id'));
            $form = $servicio->createFormAction();
            $form->handleRequest($request);

            return array('form' => $form->createView(), 'id' => $servicio->getMotivo(), 'seleccion' => $request->request->get('detalle'));
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