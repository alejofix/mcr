<?php
namespace Fix\ServicemeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\JsonResponse;
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
           // dump($request, $form->getData());
           // die;

            $servicio->execute($form, $request);
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
           // throw $this->createNotFoundException('No es posible cargar su peticion');
        }
    }

    /**
     * @Route(path="/ajax/telvirtual/{id}", name="formularios_ajax_tel_virtual", condition="request.isXmlHttpRequest() and request.request.has('formulario')", requirements={"id" = "\d+"})
     * @param Request $request
     * @return JsonResponse
     */
    public function ajaxConsultarTelefoniaVirtualAction(Request $request, $id) {

        $servicio = $this->get('serviceme.formularios.gestion')->setMotivo($id);
        $form = $servicio->createFormAction();
        $form->handleRequest($request);
        $servicio->execute($form, $request);

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('FixServicemeBundle:MiscTelVirtual')->findBy(array('account' => $form->get('cuenta')->getData(), 'isActive' => 1));
        $result = ($repository != null) ? true : false;
        $list = array();
        if($repository != null) {
            foreach ($repository AS $object) {
                $list[] = $object->getPhone();
            }
        }
        return new JsonResponse(array('status' => $result, 'phone' => $list));
    }
}