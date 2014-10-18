<?php

namespace Outil\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OutilServiceBundle:Default:index.html.twig', array('name' => $name));
    }
}
