<?php

namespace Intranet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
	
    public function indexAction()
    {
    	$user = $this->getUser();

        return $this->render('IntranetAdminBundle:Default:index.html.twig', array('name' => $user));
    }
    public function accueilAction()
    {
    	$user = $this->getUser();

        return $this->render('IntranetAdminBundle:Default:accueil.html.twig', array('name' => $user));
    }

    /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function addAction()
    {
    	$user = $this->getUser();

        return $this->render('IntranetAdminBundle:Default:index.html.twig', array('name' => $user));
    }


    public function auteurAction()
    {
    	// On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
    if (!$this->get('security.context')->isGranted('ROLE_AUTEUR')) {
      // Sinon on déclenche une exception « Accès interdit »
      throw new AccessDeniedException('Accès limité aux auteurs.');
    }
    

        return $this->render('IntranetAdminBundle:Default:auteur.html.twig');
    }
}
