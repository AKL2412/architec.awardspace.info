<?php

namespace Intranet\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IntranetEtudiantBundle:Default:index.html.twig', array('name' => $name));
    }
}
