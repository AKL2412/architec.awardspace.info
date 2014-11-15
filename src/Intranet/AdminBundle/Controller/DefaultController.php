<?php

namespace Intranet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Intranet\AdminBundle\Entity\Anneescolaire;
use Intranet\AdminBundle\Entity\Filiere;
use Intranet\AdminBundle\Entity\Matiere;
use Intranet\AdminBundle\Form\MatiereType;
use Intranet\AdminBundle\Form\FiliereType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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
              ->add('datedebut',     'date')
               ->add('datefin',     'date')
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

    public function ajoutmatiereAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $matiere = new Matiere();
        $form = $this->get('form.factory')->create(new MatiereType(),$matiere);
        if($form->handleRequest($request)->isValid()){
            $em->persist($matiere);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info',"La classe a été enregistrée avec succès");
            return $this->redirect($this->generateUrl('intranet_admin_ajout_matiere'));
        }
     return $this->render('IntranetAdminBundle:Default:ajoutmatiere.html.twig',
        array(
            'matieres' =>$em->getRepository('IntranetAdminBundle:Matiere')->findAll(),
            'form'=>$form->createView()
            ));   
    }
     public function ajoutfiliereAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $filiere = new Filiere();

        $filiere->setDate(new \Datetime());

        $form = $this->get('form.factory')
                                ->create(new FiliereType(), $filiere);

        if ($form->handleRequest($request)->isValid()) {
              $em->persist($filiere);
              $em->flush();
              $request->getSession()->getFlashBag()->add('info', 'Filière bien enregistrée.');

              // On redirige vers la page de visualisation de l'annonce nouvellement créée
              return $this->redirect($this->generateUrl('intranet_admin_ajout_filière'));
            }


     return $this->render('IntranetAdminBundle:Default:ajoutfiliere.html.twig',
        array(
            'filieres' =>$em->getRepository('IntranetAdminBundle:Filiere')->findAll(),
            'form'=>$form->createView()
            )
        );   
    }

    public function voirfiliereAction($id,Request $request){


        $em = $this->getDoctrine()->getManager();

        $filiere = $em->getRepository('IntranetAdminBundle:Filiere')
                        ->find($id);
        if($filiere == null){
            throw new NotFoundHttpException('Identifiant incorrect');
        }

        $matieres = array();

        if(!empty($request->request->all())){

            foreach($request->request->all() as $req){

                $m = $em->getRepository('IntranetAdminBundle:Matiere')->find($req);
                $m->removeFiliere($filiere);

            }
           $em->flush();
            

            return $this->redirect($this->generateUrl('intranet_admin_voir_filière', 
                array('id' => $filiere->getId())));
        }


        foreach ($em->getRepository('IntranetAdminBundle:Matiere')
                        ->findAll() as $key => $mat) {
            if($mat->estFiliere($filiere))
                $matieres[] = $mat;
        }
        

        return $this->render('IntranetAdminBundle:Default:voirfiliere.html.twig',
        array(
            'filiere' =>$filiere,
            'matieres'=>$matieres
            )
        );
    }

      public function voirmatiereAction($id,Request $request){


        $em = $this->getDoctrine()->getManager();

        $matiere = $em->getRepository('IntranetAdminBundle:Matiere')
                        ->find($id);
        if($matiere == null){
            throw new NotFoundHttpException('Identifiant incorrect');
        }

        $filieres = array();

        if(!empty($request->request->all())){

            foreach($request->request->all() as $req){

                $m = $em->getRepository('IntranetAdminBundle:Filiere')->find($req);
                $matiere->addFiliere($m);

            }
           $em->flush();
            

            return $this->redirect($this->generateUrl('intranet_admin_voir_matiere', 
                array('id' => $matiere->getId())));
        }


        foreach ($em->getRepository('IntranetAdminBundle:Filiere')
                        ->findAll() as $key => $fil) {
            if(!$matiere->estFiliere($fil))
                $filieres[] = $fil;
        }
        

        return $this->render('IntranetAdminBundle:Default:voirmatiere.html.twig',
        array(
            'matiere' =>$matiere,
            'filieres'=>$filieres
            )
        );
    }
}
