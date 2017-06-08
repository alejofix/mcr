<?php

    namespace Fix\ServicemeBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;

    class Formulariostipo extends AbstractFixture implements OrderedFixtureInterface {

        public function load(ObjectManager $manager) {

            $lista = array('formulario_prueba_nombre_1', 'formulario_prueba_nombre_2');

            foreach ($lista AS $nombre) {
                $formulariostipo = new \Fix\ServicemeBundle\Entity\Formulariostipo();
                $formulariostipo->setNombre($nombre);
                $formulariostipo->setEstado($this->getReference('ESTADO_ACTIVO'));
                $formulariostipo->setServicio($this->getReference('SERVICIO_TRIPLEPLAY'));

                $manager->persist($formulariostipo);
                $formulariostipo->setUsuario($this->getReference('USUARIO_FIX'));

            }

            $manager->flush();
        }

        public function getOrder() {
            return 5;
        }
    }