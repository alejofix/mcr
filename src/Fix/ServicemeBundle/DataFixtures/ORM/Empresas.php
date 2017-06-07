<?php

namespace Fix\ServicemeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Empresas extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $lista = array('CLARO', 'AIB', 'BRM', 'ATENTO', 'INTERCONTACT');

        foreach ($lista AS $nombre) {

            $empresa = new \Fix\ServicemeBundle\Entity\Empresas();
            $empresa->setEstado($this->getReference('ESTADO_ACTIVO'));
            $empresa->setNombre($nombre);
            $manager->persist($empresa);
            $this->addReference('EMPRESA_'.$nombre, $empresa);
        }

        $manager->flush();
        //$this->addReference('EMPRESA_', $empresa);
        //  $this->addReference('EMPRESA_'.$nombre, $empresa);


    }

    public function getOrder() {
        return 2;
    }
}