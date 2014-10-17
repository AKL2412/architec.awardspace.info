<?php  
namespace OC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\RedirectResponse; // N'oubliez pas ce use

class InfoController extends Controller
{
	public function redirectAction()
    {
    	

    // 	if (!$this->get('security.context')->isGranted('ROLE_AUTEUR')) {
    //   // Sinon on déclenche une exception « Accès interdit »
    //   throw new AccessDeniedException('Accès limité aux auteurs.');
    // }
    if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {
     
      $url = $this->get('router')->generate('intranet_admin_accueil');
    
    	return new RedirectResponse($url);
    }else if ($this->get('security.context')->isGranted('ROLE_ETUDIANT')) {
     
      $url = $this->get('router')->generate('intranet_etudiant_homepage');
    
    	return new RedirectResponse($url);
    }else if ($this->get('security.context')->isGranted('ROLE_PROFESSEUR')) {
     
      $url = $this->get('router')->generate('intranet_professeur_homepage');
    
    	return new RedirectResponse($url);
    }else{
    	throw new AccessDeniedException('Accès limité');
    }

    // $user = $this->getUser();
    // 	echo '<pre>';
    // 	print_r($user);
    // 	echo '</pre>';
    //     return new Response("Access à l'intranet");

        
    }
}