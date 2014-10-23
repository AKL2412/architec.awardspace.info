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
// On récupère le service
    $antispam = $this->container->get('outil_service.antispam');

    // Je pars du principe que $text contient le texte d'un message quelconque
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    if ($antispam->isSpam($text)) {
      throw new \Exception('Votre message a été détecté comme spam !');
    }
    
    // Ici le message n'est pas un spam
    $user = $this->getUser();

        return $this->render('IntranetAdminBundle:Default:accueil.html.twig', array('user' => $user));
    }

    /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function addAction()
    {
        /*
        $dir = "/images/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}

        //*/
        $target_dir = "img/".$_POST['dossier'].'/';
        if (!is_dir($target_dir))mkdir($target_dir);
        $target_dir = $target_dir . basename( $_FILES["uploadFile"]["name"]);
        $uploadOk=1;
        $msg = '';
        if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) {
            $msg = "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.";
        } else {
            $msg = "Sorry, there was an error uploading your file. ";
        }
        $msg .= " -- ".$target_dir;
    	$user = $this->getUser();
        return $this->render('IntranetAdminBundle:Default:accueil.html.twig', 
            array(
                'name' => $user,
                'message'=>$msg
                )
            );
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
