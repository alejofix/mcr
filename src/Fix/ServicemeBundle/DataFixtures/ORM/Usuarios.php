<?php

namespace Fix\ServicemeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Usuarios extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface {

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {

        ///add de usuario Alejandro Montenegro
        $usuario = new \Fix\ServicemeBundle\Entity\Usuarios();
        $usuario->setUsuario('FIX');
        $usuario->setNombres('Alejandro');
        $usuario->setApellidos('Montenegro');
        $usuario->setCargo('Analista');
        $usuario->setCorreo('jorge.montenegro.t@claro.com.co');
        $usuario->setDocumentoNumero('79696444');
        $usuario->setDocumentoTipo('CC');
        $usuario->setGenero(1);
        $usuario->setRole('ROLE_ROOT');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($usuario, 'qwerty');
        $usuario->setContrasena($password);

        $manager->persist($usuario);
        $usuario->setEmpresa($this->getReference('EMPRESA_CLARO'));

        $this->addReference('USUARIO_'.'FIX', $usuario);
        $manager->flush();

    }

    public function getOrder() {
        return 3;
    }
}