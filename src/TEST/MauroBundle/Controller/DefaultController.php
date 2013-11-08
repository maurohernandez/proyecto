<?php

namespace TEST\MauroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TESTMauroBundle:Default:index.html.twig', array('name' => 'hola mauro en synfony'));
    }
}
