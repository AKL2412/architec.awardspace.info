<?php

namespace Internet\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('InternetsiteBundle:Default:index.html.twig');
    }
}
