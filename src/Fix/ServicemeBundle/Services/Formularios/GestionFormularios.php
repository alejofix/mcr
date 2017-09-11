<?php

    namespace Fix\ServicemeBundle\Services\Formularios;

    use Doctrine\ORM\EntityManager;
    use Symfony\Component\Form\FormFactory;

    class GestionFormularios {

        private $entityManager;
        private $formFactory;

        function __construct(EntityManager $entityManager, FormFactory $formFactory) {

            $this->entityManager = $entityManager;
            $this->formFactory = $formFactory;
        }

        public function execute($form) {

        }

        /**
         * Retorna la ruta de la plantilla de formulario
         *
         * @param null $motivo
         * @return string
         */
        public function getPathTemplate($motivo = null) {
            $archivo = sprintf('%s.html.twig', $motivo);
            return implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Resources', 'views', 'Formularios', 'Motivo', $archivo));

        }

    }