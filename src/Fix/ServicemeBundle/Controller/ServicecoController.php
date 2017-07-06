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
     * @Route(path="/index", name="indexServiceco")
     * @Template("FixServicemeBundle:Serviceco:index.html.twig")
     *
     */
    public function  indexAction(){


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
            $em->persist($serviceco);
            $em->flush();

      //    throw $this->createNotFoundException('error');
            $this->addFlash('mensajesuccess', 'Información almacenada con éxito… ¡Gracias!.');
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
