<?php

    namespace Fix\ServicemeBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;

    class Formulariostipo extends AbstractFixture implements OrderedFixtureInterface {

        public function load(ObjectManager $manager) {

            $lista = array(
                    'FORMULARIO_PRUEBA_NOMBRE_1',
                    'FORMULARIO_PRUEBA_NOMBRE_2',
                    'FORMULARIO_PRUEBA_NOMBRE_3');

            foreach ($lista AS $nombre) {
                $formulariostipo = new \Fix\ServicemeBundle\Entity\Formulariostipo();
                $formulariostipo->setNombre($nombre);
                $formulariostipo->setEstado($this->getReference('ESTADO_ACTIVO'));
                $formulariostipo->setServicio($this->getReference('SERVICIO_TRIPLEPLAY'));
                $formulariostipo->setUsuario($this->getReference('USUARIO_FIX'));
                $manager->persist($formulariostipo);

                $this->addReference('TIPO_'.$nombre, $formulariostipo);

         }

            $manager->flush();
        }

        public function getOrder() {
            return 5;
        }
    }