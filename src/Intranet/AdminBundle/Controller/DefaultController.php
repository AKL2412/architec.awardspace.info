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
        /*
        // Pour récupérer le service UserManager du bundle
$userManager = $this->get('fos_user.user_manager');

// Pour charger un utilisateur
$user = $userManager->findUserBy(array('username' => 'riouk'));

// Pour modifier un utilisateur
//$user->setEmail('cetemail@nexiste.pas');
$user->setRoles(array('ROLE_ETUDIANT'));
$userManager->updateUser($user); // Pas besoin de faire un flush avec l'EntityManager, cette méthode le fait toute seule !

// Pour supprimer un utilisateur
//$userManager->deleteUser($user);

// Pour récupérer la liste de tous les utilisateurs
//$users = $userManager->findUsers();

//*/
    $user = $this->getUser();

        return $this->render('IntranetAdminBundle:Default:accueil.html.twig', array('user' => $user));
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
