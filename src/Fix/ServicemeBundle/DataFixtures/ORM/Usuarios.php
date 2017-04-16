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
			
			$usuario = new \Fix\ServicemeBundle\Entity\Usuarios();
			$usuario->setUsuario('prueba');
			$usuario->setNombres('prueba');
			$usuario->setApellidos('prueba');
			$usuario->setCargo('prueba');
			$usuario->setCorreo('prueba@prueba.com');
			$usuario->setDocumentoNumero('123456789');
			$usuario->setDocumentoTipo('cedula');
			$usuario->setEmpresa($this->getReference('EMPRESA_CLARO'));
			$usuario->setGenero(rand(0, 1));
			$usuario->setRole('ROLE_ADMIN');
			
			$encoder = $this->container->get('security.password_encoder');
        	$password = $encoder->encodePassword($usuario, '123');
        	
			$usuario->setContrasena($password);
			$manager->persist($usuario);
				
			for ($i = 0; $i <= 100; $i++) {
				
				$usuario = new \Fix\ServicemeBundle\Entity\Usuarios();
				$usuario->setUsuario('usuario_'.$i);
				$usuario->setContrasena('123');
				$usuario->setNombres('Nombres '.$i);
				$usuario->setApellidos('Apellido '.$i);
				$usuario->setCargo('Cargo');
				$usuario->setCorreo('correo@correo.com');
				$usuario->setDocumentoNumero('123456789');
				$usuario->setDocumentoTipo('cedula');
				$usuario->setEmpresa($this->getReference('EMPRESA_CLARO'));
				$usuario->setGenero(rand(0, 1));
				$usuario->setRole('ROLE_ADMIN');
				
				$manager->persist($usuario);
			}
			
			$manager->flush();
		}
		
		public function getOrder() {
			return 3;
		}
	}