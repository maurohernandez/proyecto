<?php

namespace OTRA\SurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OTRASurveyBundle:Default:index.html.twig', array('name' => 'otra cadena'));
    }
}
