<?php

namespace Fix\ServicemeBundle\Controller;

use PHPExcel;
use PHPExcel_IOFactory;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;

use \Fix\ServicemeBundle\Entity\Formularios;
use \Fix\ServicemeBundle\Entity\Formulariostipo;
use \Fix\ServicemeBundle\Entity\Formulariosrazon;

use \Fix\ServicemeBundle\Form\FormulariosType;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Listas Generales Formularios Mejoramiento
 *
 * @Route(path="serviceme/formularios")
 */


class ListaformulariosController extends Controller
{

    /**
     * ListaformulariosController::indexAction
     *
     * @return
     * @Route(path="/index/{page}", name="indexFormularios", requirements={"page" = "\d+"}, defaults={"page" = 1})
     * @Template("FixServicemeBundle:Formularios:Serviceme/index.html.twig")
     * @Method({"GET"})
     *
     * @author alejo_fix@hotmail.com
     */
    public function indexAction(Request $request, $page = 1){

        $em = $this->getDoctrine()->getManager();

        $paginator = $this->get('knp_paginator');
        $paginacion = $paginator->paginate(
            $em->getRepository('Fix\ServicemeBundle\Entity\Formulariostipo')->findBy([]),
            $page,
            10
        );

        return array('pagination' => $paginacion);

    }


    /**
     * ListaformulariosController::tipoAction
     *
     * @param $id
     * @return formulariostipo
     * @Route(path="/tipo/{id}", name="tipoFormulario")
     */
    public function tipoAction($id){

        $repository = $this->getDoctrine()->getRepository('FixServicemeBundle:Formulariostipo');
        $formulariostipo = $repository->find($id);


        if(!$formulariostipo){

           // throw $this->createNotFoundException('Tipo Formulario Inexistente');
            $this->addFlash('mensajeerror', 'Tipo Formulario Inexistente.');
            return $this->redirectToRoute('mensajeError');
        }
            return $this->render('FixServicemeBundle:Formularios:Serviceme/tipo.html.twig', array('usuario' => $formulariostipo));
    }


    /**
     * ListaformulariosController::xlsxAction
     * Descarga el archivo excel por Tipo Formulario
     *
     * @param $id
     * @Route(path="/xlsx/{id}", name="xlsxFormulario")
     */
    public function xlsxAction($id){

        $fs = new Filesystem();

        $finder = new Finder();
        $buscar = $finder->in('C:\Users\Expertos\Downloads')->files()->name('*.xlsx');

        foreach ($buscar AS $file) {
            $fs->remove($file->getRealPath());
        }

        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();
        $query = $qb->select('f')
            ->from('FixServicemeBundle:Formularios', 'f')
            ->where($qb->expr()->eq('f.tipo', $id))
            ->getQuery()->getResult();

        // dump($query);
        // die();

        $objPHPExcel = new PHPExcel();
        $objPHPExcel
            ->getProperties()->setCreator('Alejo_Fix')
            ->setLastModifiedBy($this->getUser()->getFullName())
            ->setTitle('developed by MCR')
            ->setSubject("Office EXCEL_PHP")
            ->setDescription('Reports - MCR')
            ->setKeywords("office_open Symfony")
            ->setCategory("Mejoramiento 2017");

        $objPHPExcel->setActiveSheetIndex(0);

        $index = 2;

        foreach ($query AS $file) {

            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'ID')
                ->setCellValue('A'.$index, $file->getId())
                ->setCellValue('B1', 'CUENTA')
                ->setCellValue('B'.$index, $file->getCuenta())
                ->setCellValue('C1', 'FECHA')
                ->setCellValue('C'.$index, $file->getFecha()->format("Y-m-d H:i:s"))
                ->setCellValue('D1', 'REFERENCIA')
                ->setCellValue('D'.$index, $file->getReferencia())
                ->setCellValue('E1', 'DETALLE')
                ->setCellValue('E'.$index, $file->getDetalle())
                ->setCellValue('F1', 'INFORMACION 1')
                ->setCellValue('F'.$index, $file->getInformacionuno())
                ->setCellValue('G1', 'INFORMACION 2')
                ->setCellValue('G'.$index, $file->getInformaciondos())
                ->setCellValue('H1', 'INFORMACION 3')
                ->setCellValue('H'.$index, $file->getInformaciontres())
                ->setCellValue('I1', 'DATOS')
                ->setCellValue('I'.$index, $file->getDatos())
                ->setCellValue('L1', 'RAZON')
                ->setCellValue('L'.$index, $file->getRazon()->getNombre())
            ;
            $index++;
        }

        $objPHPExcel->getActiveSheet()->setTitle('TIPO_'.$file->getTipo()->getId());
        $objPHPExcel->setActiveSheetIndex(0);

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save(implode('/', ['D:\xampp\htdocs\mcr\_fix\temp', ('~'.$file->getTipo()->getId()).'_tmp.xlsx']));

        $response = new BinaryFileResponse(implode('/', ['D:\xampp\htdocs\mcr\_fix\temp', ('~'.$file->getTipo()->getId()).'_tmp.xlsx']));
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            ($this->getUser()->getUsuario()).'_Tipo_('.$file->getTipo()->getId().')_'.date('Y-m-d H:i').'.xlsx')
            ;

        return $response;

    }


    /**
     * ListaformulariosController::testAction
     *
     * @Route(path="/test/{page}", name="testFormularios"), requirements={"page" = "\d+"}, defaults={"page" = 1}
     * @Template("FixServicemeBundle:Formularios:Serviceme/test.html.twig")
     */
    public function testAction(Request $request, $page = 1) {
        // $em = $this->getDoctrine()->getRepository('FixServicemeBundle:Formularios')->findByMotivoGroup();
        $em = $this->getDoctrine()->getManager();

        $paginator = $this->get('knp_paginator');
        $paginacion = $paginator->paginate(
            $em->getRepository('Fix\ServicemeBundle\Entity\Formularios')->findBy([], ['fecha' => 'DESC']),
            $page,
            20
        );

        return array('pagination' => $paginacion);

    }

}


