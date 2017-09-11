<?php

    namespace Fix\ServicemeBundle\Services\Formularios;

    use Doctrine\ORM\EntityManager;
    use Fix\ServicemeBundle\Entity\Formularios;
    use Fix\ServicemeBundle\Form\Formularios\Form1Type;
    use Symfony\Bundle\FrameworkBundle\Routing\Router;
    use Symfony\Component\Filesystem\Filesystem;
    use Symfony\Component\Form\FormFactory;
    use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

    class GestionFormularios {

        private $entityManager;
        private $formFactory;
        private $pathTemplate;
        private $router;
        private $entity;
        private $filesystem;

        /**
         * GestionFormularios constructor.
         * @param EntityManager $entityManager
         * @param FormFactory $formFactory
         * @param Router $router
         * @param Filesystem $filesystem
         */
        function __construct(EntityManager $entityManager, FormFactory $formFactory, Router $router, Filesystem $filesystem) {

            $this->entityManager = $entityManager;
            $this->formFactory = $formFactory;
            $this->pathTemplate = sprintf('%s/Resources/views/Formularios/Motivo', dirname(dirname(__DIR__)));
            $this->router = $router;
            $this->entity = new Formularios();
            $this->filesystem = $filesystem;
        }

        /**
         * Ejecuta el proceso solicitado
         *
         * @param $form
         */
        public function execute($form) {

            $this->entityManager->persist($this->entity);
            $this->entityManager->flush();
        }

        /**
         * Retorna la ruta de la plantilla de formulario
         *
         * @param null $motivo
         * @return string
         */
        private function getPathTemplate($motivo = null) {

            return sprintf('%s/%s.html.twig', $this->pathTemplate, $motivo);
        }

        /**
         * Crea el formulario correspondiente
         *
         * @param null $motivo
         * @return \Symfony\Component\Form\FormInterface
         */
        public function createFormAction($motivo = null) {

            return $this->formFactory->create(Form1Type::class, $this->entity, [
                'action' => $this->router->generate('formularios_motivos', ['id' => $motivo], UrlGeneratorInterface::ABSOLUTE_PATH),
                'method' => 'POST',
                '_motivo' => $motivo
            ]);
        }

        /**
         * Valida existencia de plantilla
         *
         * @param null $motivo
         * @return bool
         */
        public function hasTemplate($motivo = null) {

            return $this->filesystem->exists($this->getPathTemplate($motivo));
        }

        /**
         * Retorna el cdn de la plantilla
         *
         * @param null $motivo
         * @return string
         */
        public function getTemplate($motivo = null) {
            return sprintf('FixServicemeBundle:Formularios/Motivo:%s.html.twig', $motivo);
        }
    }