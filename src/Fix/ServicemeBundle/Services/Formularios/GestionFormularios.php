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
        private $motivo;

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
         * Genera el proceso de asignacion del motivo para los procesos internos de
         * la gestion de formularios
         *
         * @param null $motivo
         * @return $this
         */
        public function setMotivo($motivo = null) {

            $this->motivo = $motivo;
            return $this;
        }

        /**
         * Retorna el motivo
         *
         * @return mixed
         */
        public function getMotivo() {

            return $this->motivo;
        }

        /**
         * Ejecuta el proceso solicitado
         *
         * @param null $form
         */
        public function execute($form = null) {

            $this->entity->setTipo($this->entityManager->getRepository('FixServicemeBundle:Formulariostipo')->findOneBy(array('id' => $this->motivo)));

            if($this->motivo == 3):
                $this->entity->setReferencia($form->get('referencia')->getData()->getReferencia());
            endif;

            $this->entityManager->persist($this->entity);
            $this->entityManager->flush();

        }

        /**
         * Retorna la ruta de la plantilla de formulario
         *
         * @return string
         */
        private function getPathTemplate() {

            return sprintf('%s/%s.html.twig', $this->pathTemplate, $this->motivo);
        }

        /**
         * Crea el formulario correspondiente
         *
         * @return \Symfony\Component\Form\FormInterface
         */
        public function createFormAction() {

            return $this->formFactory->create(Form1Type::class, $this->entity, [
                'action' => $this->router->generate('formularios_motivos', ['id' => $this->motivo], UrlGeneratorInterface::ABSOLUTE_PATH),
                'method' => 'POST',
                '_motivo' => $this->motivo
            ]);
        }

        /**
         * Valida existencia de plantilla
         *
         * @return bool
         */
        public function hasTemplate() {

            return $this->filesystem->exists($this->getPathTemplate());
        }

        /**
         * Retorna el cdn de la plantilla
         *
         * @return string
         */
        public function getTemplate() {
            return sprintf('FixServicemeBundle:Formularios/Motivo:%s.html.twig', $this->motivo);
        }
    }