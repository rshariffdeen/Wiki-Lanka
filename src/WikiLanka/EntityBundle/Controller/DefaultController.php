<?php

namespace WikiLanka\EntityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WikiLankaEntityBundle:Default:index.html.twig', array('name' => $name));
    }
}
