<?php

namespace Fix\ServicemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route(path="/", name="dahsboard")
     */
    public function indexAction()
    {
        return $this->render('FixServicemeBundle:Default:index.html.twig');
    }
}
