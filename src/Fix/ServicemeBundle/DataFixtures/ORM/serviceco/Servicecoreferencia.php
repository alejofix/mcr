<?php

    namespace Fix\ServicemeBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;


    class Servicecoreferencia extends AbstractFixture implements OrderedFixtureInterface {

        public function load(ObjectManager $manager) {

            $lista = array(
                'HFC',
                'TELEVISIÓN',
                'TELEFONÍA',
                'INTERNET',
                'INFORMATIVO');

            foreach ($lista AS $nombre){

                $referencia = new \Fix\ServicemeBundle\Entity\Servicecoreferencia();
                $referencia->setNombre($nombre);
                $referencia->setEstado($this->getReference('ESTADO_ACTIVO'));

                $manager->persist($referencia);
            }

            $manager->flush();

        }

        public function getOrder() {
            return 8;
        }

    }