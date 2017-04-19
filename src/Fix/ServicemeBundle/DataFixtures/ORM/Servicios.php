<?php

namespace Fix\ServicemeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Servicios extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $lista = array(
                'TRIPLEPLAY',
                'INTERNET',
                'TELEFONIA',
                'TELEFONIA ADYACENTE',
                'TELEVISION',
                'TELEVISION ANALOGA UNIDIRECCIONAL',
                'TELEVISION BASICA BIDIRECCIONAL',
                'TELEVISION DVB',
                'TELEVISION ATSC MOTOROLA',
                'TELEVISION DTH SATELITAL',
                'TELEVISION NAGRA',
                'TELEVISION CLARO VIDEO',
                'TELEVISION CLARO VIDEO NAGRA',
                'TELEVISION CLARO PLAY',
                'DOBLEPLAY',
                'MULTIPLAY'
            );

        foreach ($lista AS $nombre) {

            $servicio = new \Fix\ServicemeBundle\Entity\Servicios();
            $servicio->setProducto($nombre);
            $manager->persist($servicio);

            $this->addReference('SERVICIO_'.$nombre, $servicio);
        }

        $manager->flush();
    }

    public function getOrder() {
        return 4;
    }
}