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
     * @return 
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
     * @param $id
     * @return Response
     */
    public function motivoAction(Request $request, $id) {

        $fs = new Filesystem();
        $archivo = sprintf('%s.html.twig', $id);
        $ruta = implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Resources', 'views', 'Formularios', 'Motivo', $archivo));

        if($fs->exists($ruta) == false) {
            // throw $this->createNotFoundException('No existe el formularios solicitado');
            $this->addFlash('mensajedanger', 'No existe el formulario solicitado.');
            return $this->redirectToRoute('alertFormularios');
        }

        $entity = new \Fix\ServicemeBundle\Entity\Formularios();
        $form = $this->createNewFormularioForm($entity, $id);
        $form->handleRequest($request);

        if($form->isSubmitted() AND $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $entity->setTipo($em->getRepository('FixServicemeBundle:Formulariostipo')->findOneBy(array('id' => $id)));
            $em->persist($entity);
            $em->flush();

            $this->addFlash('mensajesuccess', 'Información almacenada con éxito… ¡Gracias!.');
            return $this->redirectToRoute('alertFormularios');
         // return $this->redirectToRoute('formularios_motivos', array('id' => $id));

        }

        return $this->render(sprintf('FixServicemeBundle:Formularios/Motivo:%s.html.twig', $id), array('form' => $form->createView()));
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
            case 007:
                $clase = \Fix\ServicemeBundle\Form\Formularios\TestType::class;
                // formulario de pruebas
                break;
            case 1:
                $clase = \Fix\ServicemeBundle\Form\Formularios\UnoType::class;
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