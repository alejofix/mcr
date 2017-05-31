<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use \Fix\ServicemeBundle\Entity\Formularios;
use \Fix\ServicemeBundle\Form\FormulariosType;


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
     * Selección inicial Index FORMULARIO por ID.
     *
     * @return
     * @Route(path="/index/{id}", name="formularios", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function indexAction($id)
    {

        switch ($id) {

            case 1:
                return $this->redirectToRoute('motivo_1');
                break;
            case 2:
                return $this->redirectToRoute('motivo_2');
                break;
            case 3:
                return $this->redirectToRoute('motivo_3');
                break;

            default:
                return $this->render('FixServicemeBundle:Formularios:index.html.twig');

        }

    }

    /**
     * FormulariosController::add1Action()
     *
     * @Route(path="/index/motivo_1", name="motivo_1")
     * @Template("FixServicemeBundle:Formularios:Motivo/1.html.twig")
     *
     * @return void
     */
    public function add1Action() {

        $formularios = new Formularios();
        $form = $this->createCreateForm($formularios);

        return array('form' => $form->createView());
    }

    /**
     * @param Formularios $entity
     * @return \Symfony\Component\Form\Form
     */
    private function createCreateForm(Formularios $entity){

        $form = $this->createForm(FormulariosType::class, $entity, array(
            'action' => $this->generateUrl('motivo_1'),
            'method' => 'POST'
            ));

        return $form;
    }

    /**
     * FormulariosController::add2Action()
     *
     *
     * @Route(path="/index/motivo_2", name="motivo_2")
     * @Template("FixServicemeBundle:Formularios:Motivo/2.html.twig")
     * @return void
     */
    public function add2Action() {


    }

    /**
     * FormulariosController::add2Action()
     *
     *
     * @Route(path="/index/motivo_3", name="motivo_3")
     * @Template("FixServicemeBundle:Formularios:Motivo/3.html.twig")
     * @return void
     */
    public function add3Action() {


    }

}
