<?php

	namespace Fix\ServicemeBundle\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
	
	class SecurityController extends Controller {
		
		/**
		 * SecurityController::loginAction()
		 * 
		 * @Route(path="/login", name="login")
		 * @Template("FixServicemeBundle:Security:login.html.twig")
		 * 
		 * @return array
		 */
		public function loginAction() {
		
			$autil = $this->get('security.authentication_utils');
			return array(
				'last_username' => $autil->getLastUsername(), 
				'error' => $autil->getLastAuthenticationError()
			);
		}
		
		/**
		 * SecurityController::loginCheckAction()
		 * 
		 * @Route(path="/login_check", name="login_check")
		 * @return void
		 */
		public function loginCheckAction() {
		
		}
		
		/**
		 * SecurityController::logOutAction()
		 * 
		 * @Route(path="/logout", name="logout")
		 * @return void
		 */
		public function logOutAction() {
			
		}
	}
