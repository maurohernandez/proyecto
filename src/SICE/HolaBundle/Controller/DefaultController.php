<?php

namespace SICE\HolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SICEHolaBundle:Default:index.html.twig', array('name' => 'Saludos'));
    }
}
