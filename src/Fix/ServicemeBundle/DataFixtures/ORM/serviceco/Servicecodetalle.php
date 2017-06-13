<?php

    namespace Fix\ServicemeBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\AbstractFixture;
    use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;


    class Servicecodetalle extends AbstractFixture implements OrderedFixtureInterface {

        public function load(ObjectManager $manager) {

            $lista = array(
                'ALARMA ÓPTICA',
                'CAUSA EXÓGENO',
                'DESENGANCHE MASIVO',
                'ESTÁNDAR',
                'FALLA INTERNET',
                'FALLA TELEFONÍA',
                'FALLA TELEVISIÓN',
                'FLUIDO ELÉCTRICO',
                'HURTO',
                'PLATAFORMA INTERNET',
                'PLATAFORMA TELEFONÍA',
                'PLATAFORMA TELEVISIÓN',
                'RUPTURA DE FIBRA');

            foreach ($lista AS $nombre){

                $detalle = new \Fix\ServicemeBundle\Entity\Servicecodetalle();
                $detalle->setNombre($nombre);
                $detalle->setEstado($this->getReference('ESTADO_ACTIVO'));

                $manager->persist($detalle);
            }

            $manager->flush();

        }

        public function getOrder() {
            return 7;
        }

    }