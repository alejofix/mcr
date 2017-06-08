<?php

    namespace Fix\ServicemeBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;

    class formulariosrazon extends AbstractFixture implements OrderedFixtureInterface {

        public function load(ObjectManager $manager) {

            $lista = array(
                    'RAZON_FORMULARIO_A',
                    'RAZON_FORMULARIO_L',
                    'RAZON_FORMULARIO_E',
                    'RAZON_FORMULARIO_J',
                    'RAZON_FORMULARIO_A',
                    'RAZON_FORMULARIO_N',
                    'RAZON_FORMULARIO_D',
                    'RAZON_FORMULARIO_R',
                    'RAZON_FORMULARIO_O');

            foreach ($lista AS $nombre) {
                $formulariosrazon = new \Fix\ServicemeBundle\Entity\Formulariosrazon();
                $formulariosrazon->setNombre($nombre);
                $formulariosrazon->setEstado($this->getReference('ESTADO_ACTIVO'));
                $formulariosrazon->setTipo($this->getReference('TIPO_FORMULARIO_PRUEBA_NOMBRE_'.rand(1,3)));

                $manager->persist($formulariosrazon);



            }

            $manager->flush();
        }

        public function getOrder() {
            return 6;
        }



    }