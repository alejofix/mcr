<?php
	
	namespace Fix\ServicemeBundle\DataFixtures\ORM;
	
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	
	class Empresas extends AbstractFixture implements OrderedFixtureInterface {
		
		public function load(ObjectManager $manager) {
			
			$empresa = new \Fix\ServicemeBundle\Entity\Empresas();
			$empresa->setNombre('CLARO');
			$empresa->setEstado($this->getReference('ESTADO_ACTIVO'));
			
			$manager->persist($empresa);
			$manager->flush();
			
			$this->addReference('EMPRESA_CLARO', $empresa);
		}
		
		public function getOrder() {
			return 2;
		}
	}