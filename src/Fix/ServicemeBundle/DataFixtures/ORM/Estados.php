<?php
	
	namespace Fix\ServicemeBundle\DataFixtures\ORM;
	
	use Doctrine\Common\DataFixtures\AbstractFixture;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	
	class Estados extends AbstractFixture implements OrderedFixtureInterface {
		
		public function load(ObjectManager $manager) {
			
			$lista = array('ACTIVO', 'INACTIVO', 'PENDIENTE', 'FINALIZADO', 'GUARDADO', 'ELIMINADO', 'ASIGNADO', 'PROCESO', 'PAUSADO', 'EMERGENCIA');
			
			foreach ($lista AS $nombre) {
				
				$estado = new \Fix\ServicemeBundle\Entity\Estados();
				$estado->setNombre($nombre);
				$manager->persist($estado);
				
				$this->addReference('ESTADO_'.$nombre, $estado);
			}
			
			$manager->flush();
		}
		
		public function getOrder() {
			return 1;
		}
	}