<?php

namespace Fix\ServicemeBundle\Controller;

use PHPExcel;
use PHPExcel_IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use \Fix\ServicemeBundle\Entity\Formularios;
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
     * @Route(path="/index/{page}", name="indexFormularios"), requirements={"page" = "\d+"}, defaults={"page" = 1}
     * @Template("FixServicemeBundle:Formularios:Lista/index.html.twig")
     */
    public function indexAction(Request $request, $page = 1)
    {
        $em = $this->getDoctrine()->getManager();

        $paginator = $this->get('knp_paginator');
        $paginacion = $paginator->paginate(
            $em->getRepository('Fix\ServicemeBundle\Entity\Formularios')->findBy([], ['fecha' => 'DESC']),
            $page,
            9
        );

        return array('pagination' => $paginacion);

    }

    /**
     * test y pruebas para descargas .xls formularios
     *
     * @Route(path="/test")
     */
    public function testAction() {

        $fs = new Filesystem();

        $finder = new Finder();
        $buscar = $finder->in('C:\Users\Expertos\Downloads')->files()->name('*.xlsx');

        foreach ($buscar AS $file) {
            $fs->remove($file->getRealPath());
        }

        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();
        $query = $qb->select('f')->from('FixServicemeBundle:Formularios', 'f')->where($qb->expr()->eq('f.tipo', 1))->getQuery()->getResult();
  //      dump($query);

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setCreator($this->getUser()->getFullName())
            ->setLastModifiedBy("Maarten Balliauw")
            ->setTitle("Office 2007 XLSX Test Document")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Test result file");

        $objPHPExcel->setActiveSheetIndex(0);

        $index = 1;

            foreach ($query AS $file) {
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$index, $file->getCuenta());
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$index, $file->getFecha()->format("Y-m-d H:i:s"));
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$index, $file->getReferencia());

                    $index++;
                }

        $objPHPExcel->getActiveSheet()->setTitle('Prueba Hoja X');
        $objPHPExcel->setActiveSheetIndex(0);

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save(implode('/', ['C:\Users\Expertos\Downloads', 'tipo_1.xlsx']));

        $response = new BinaryFileResponse(implode('/', ['C:\Users\Expertos\Downloads', 'tipo_1.xlsx']));
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'tipo_1.xlsx'
        );

        return $response;
    }
}
