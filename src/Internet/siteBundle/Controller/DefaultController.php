<?php

namespace Internet\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InternetsiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
