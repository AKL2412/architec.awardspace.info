<?php

namespace Intranet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Intranet\AdminBundle\Entity\Anneescolaire;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
	
    public function indexAction(){

    
    	$user = $this->getUser();

        return $this->render('IntranetAdminBundle:Default:index.html.twig', array('name' => $user));
    }

    public function detailsanneeAction($annee){
            $em = $this->getDoctrine()
                                ->getManager();
            $repoAnnee = $em->getRepository('IntranetAdminBundle:Anneescolaire');
            $anneet= $repoAnnee->findOneByAnnee($annee);

        if ($anneet == null) {
          // Sinon on déclenche une exception « Accès interdit »
          throw $this->createNotFoundException('Année scolaire ['.$annee.']
inexistant.');
        }
        return $this->render('IntranetAdminBundle:Default:details.html.twig', 
            array('annee' => $anneet)
            );
   
    }
    public function paramtereAction(Request $request)
    {
        // On crée un objet Advert
            $annee = new Anneescolaire();
            $em = $this->getDoctrine()->getManager();
            // On crée le FormBuilder grâce au service form factory
            $formBuilder = $this->get('form.factory')->createBuilder('form', $annee);

            // On ajoute les champs de l'entité que l'on veut à notre formulaire
            $formBuilder
              ->add('annee',      'text')
              ->add('code',     'text')
              ->add('encours',   'checkbox') 
            ;
            $form = $formBuilder->getForm();
            $form->handleRequest($request);

            if ($form->isValid()) {
             
            
             foreach ($em->getRepository('IntranetAdminBundle:Anneescolaire')
                                ->findAll() as $key => $value) {
                 $value->setEncours(false);
             $em->persist($value);
             }
              $annee->setEncours(true);
              $em->persist($annee);
              $em->flush();

              $request->getSession()->getFlashBag()->add('info', 'Année scolaire bien enregistrée.');

              return $this->redirect($this->generateUrl('intranet_admin_parametage'));
            }

             //     echo "<pre>";
             //  print_r($em->getRepository('IntranetAdminBundle:Anneescolaire')
             //                    ->findAll());
             // echo "</pre>";
             //  die('');
        return $this->render('IntranetAdminBundle:Default:paramtre.html.twig', 
            array(
                    'form' => $form->createView(),
                    'annee'=> $em->getRepository('IntranetAdminBundle:Anneescolaire')
                                ->findOneByEncours(true)

                ));
    }


    public function rechercheAction()
    {
        $result = array();
        $result['q'] = "";
        if(!empty($_GET)){
             $result['q'] = $_GET['q'];
        }
        return $this->render('IntranetAdminBundle:Default:recherche.html.twig',
            array(
                "r"=>$result
                ));
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
