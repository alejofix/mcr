<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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
     * Redirecciona a la plantilla correspondiente
     *
     * @Route(path="/motivos/{id}", name="formularios_motivos", requirements={"id" = "\d+"})
     * @Method({"GET", "POST"})
     *
     * @param $id
     * @return Response
     */
    public function motivosAction(Request $request, $id) {

        $fs = new Filesystem();
        $archivo = sprintf('%s.html.twig', $id);
        $ruta = implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Resources', 'views', 'Formularios', 'Motivo', $archivo));

        if($fs->exists($ruta) == false) {
            throw $this->createNotFoundException('No existe el proceso solicitado');
        }

        $entity = new \Fix\ServicemeBundle\Entity\Formularios();
        $form = $this->createNewFormularioForm($entity, $id);
        $form->handleRequest($request);

        if($form->isSubmitted() AND $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $entity->setTipo($em->getRepository('FixServicemeBundle:Formulariostipo')->findOneBy(array('id' => $id)));
            $em->persist($entity);
            $em->flush();
//agregar addflash
            return $this->redirectToRoute('formularios_motivos', array('id' => $id));

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

        if($id == 1) {
            $clase = \Fix\ServicemeBundle\Form\Formularios\UnoType::class;
        }

        return $this->createForm($clase, $entity, array(
            'action' => $this->generateUrl('formularios_motivos', array('id' => $id)),
            'method' => 'POST'
        ));
    }

    /**
     * @Route(path="/test")
     */
    public function testAction() {
        dump($this->getDoctrine()->getRepository('FixServicemeBundle:Formularios')->findByMotivoGroup());
        die;
    }

}
