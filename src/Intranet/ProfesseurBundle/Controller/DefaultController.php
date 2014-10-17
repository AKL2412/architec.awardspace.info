<?php

namespace Intranet\ProfesseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IntranetProfesseurBundle:Default:index.html.twig');
    }
}
