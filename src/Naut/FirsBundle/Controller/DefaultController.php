<?php

namespace Naut\FirsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NautFirsBundle:Default:index.html.twig', array('name' => $name));
    }
}
