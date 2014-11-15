<?php

namespace Intranet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Intranet\AdminBundle\Entity\Professeur;
use Intranet\AdminBundle\Entity\Profmat;
use OC\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use Symfony\Component\HttpKernel\Exception\Exception;
class ProfesseurController extends Controller{

	public function ajoutAction(Request $request){
    	 // On crée un objet Advert
		    $prof = new Professeur();
		    $em = $this->getDoctrine()
								->getManager();
		    $repoAnnee = $em->getRepository('IntranetAdminBundle:Anneescolaire');
			$anneeEncours = $repoAnnee->findOneByEncours(true);

			if ($anneeEncours == null) {
		      // Sinon on déclenche une exception « Accès interdit »
		      throw new NotFoundHttpException('Vueillez parametrer certains paramètres : Année en cours ');
		    }
		    $prof->setAnneescolaire($anneeEncours);
		    // On crée le FormBuilder grâce au service form factory
		    $formBuilder = $this->get('form.factory')->createBuilder('form', $prof);

		    // On ajoute les champs de l'entité que l'on veut à notre formulaire
		    $formBuilder
		      ->add('datenaissance',      'date')
		      ->add('nom',     'text')
		      ->add('prenom',   'text')
		      ->add('matricule',   'text')
		      ->add('email',   'email')
		      ->add('telephone',   'text')
		      ->add('adresse',   'textarea')
		      ->add('genre', 'choice', array(
                'choices' => array(
                    'Homme' => 'Masculin',
                    'Femme' => 'Féminin'
                ),                                                                                
                'required'    => true,
                'empty_value' => 'Choisissez le sexe',
                'empty_data'  => null
            ))
		    ;

		    // À partir du formBuilder, on génère le formulaire
		    $form = $formBuilder->getForm();

		    // On fait le lien Requête <-> Formulaire
		    // À partir de maintenant, la variable $prof contient les valeurs entrées dans le formulaire par le visiteur
		    $form->handleRequest($request);

		    // On vérifie que les valeurs entrées sont correctes
		    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
		    if ($form->isValid()) {
		      // On l'enregistre notre objet $prof dans la base de données, par exemple
		      $em = $this->getDoctrine()->getManager();

		      // Creation du compte
		    $userManager = $this->container->get('fos_user.user_manager');
		    $user = $userManager->createUser();
		    $user->setUsername($prof->getMatricule());
		    $user->setEmail($prof->getEmail());
		    $user->setEnabled(true);
		    $user->setPlainPassword($prof->getMatricule());
		    $user->setRoles(
		            array(
		                 'ROLE_PROFESSEUR'
		            )
		        );
		    $userManager->updateUser($user);
		    //Ajout du compte
		    $prof->setCompte($user);

		      $em->persist($prof);
		      $em->flush();

		      $request->getSession()->getFlashBag()->add('info', 'Professeur bien enregistrée.');

		      // On redirige vers la page de visualisation de l'annonce nouvellement créée
		      return $this->redirect($this->generateUrl('intranet_admin_voir_professeur', 
		      	array('id' => $prof->getId())));
		    }
		    

		        return $this->render('IntranetAdminBundle:Professeur:ajout.html.twig', array(
		      'form' => $form->createView()
		    ));
    }



     public function voirAction($id,Request $request){
    	$em =  $this->getDoctrine()
		  ->getManager();
		 $prof=$em->getRepository('IntranetAdminBundle:Professeur')
		  ->find($id)
		;
		//$prof->setDatenaissance();
		// echo '<pre>';
		// print_r($prof);
		// echo '</pre>';
		// return new Response('');
			if ($prof == null) {
	      // Sinon on déclenche une exception « Accès interdit »
	      throw new NotFoundHttpException('Identifiant incorrect');
	    }
	    if(!empty($request->request->all())){
        
        	foreach($request->request->all() as $req){
   					$pm = $em->getRepository('IntranetAdminBundle:Profmat')->find($req);
   					
   					$em->remove($pm);
			}
			$em->flush();
        	

        	return $this->redirect($this->generateUrl('intranet_admin_voir_professeur', 
		      	array('id' => $prof->getId())));
        }
	    	return $this->render('IntranetAdminBundle:Professeur:voir.html.twig', array(
	      'professeur' => $prof
	    ));
    }
    public function listAction(Request $request){

    	// echo '<pre>';
    	// print_r($request->query);
    	// echo '</pre>';
    	//die('');
    	$etud =  $this->getDoctrine()
		  ->getManager()
		  ->getRepository('IntranetAdminBundle:Professeur')
		  ->findAll();
    	return $this->render('IntranetAdminBundle:Professeur:list.html.twig', array(
      'professeurs' => $etud
    ));
    }

    /*
    *	MODIFICATION D'UN Professeur
    *
    */
    public function modifierAction($id,Request $request){

    	$prof =  $this->getDoctrine()
		  ->getManager()
		  ->getRepository('IntranetAdminBundle:Professeur')
		  ->find($id)
		;
			// On crée le FormBuilder grâce au service form factory
	    $formBuilder = $this->get('form.factory')->createBuilder('form', $prof);

	    // On ajoute les champs de l'entité que l'on veut à notre formulaire
	    $formBuilder
	      ->add('datenaissance',      'date')
	      ->add('nom',     'text')
	      ->add('prenom',   'text')
	     // ->add('matricule',   'text')
	      ->add('email',   'email')
	      ->add('telephone',   'text')
	    ;
	    // À partir du formBuilder, on génère le formulaire
	    $form = $formBuilder->getForm();

	    // On fait le lien Requête <-> Formulaire
	    // À partir de maintenant, la variable $prof contient les valeurs entrées dans le formulaire par le visiteur
	    $form->handleRequest($request);

	    if ($form->isValid()) {
	      // On l'enregistre notre objet $prof dans la base de données, par exemple
	      $em = $this->getDoctrine()->getManager();
	      //$prof->setDate(new \Datetime());
	      $em->persist($prof);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('info', 'Professeur bien modifié.');

	      // On redirige vers la page de visualisation de l'annonce nouvellement créée
	      return $this->redirect($this->generateUrl('intranet_admin_voir_professeur', 
	      	array('id' => $prof->getId())));
	    }


	    return $this->render('IntranetAdminBundle:Professeur:ajoutCompte.html.twig', array(
	      'form' => $form->createView()
	    ));

    }

    public function affectermatiereAction($id, Request $request){

    	$em = $this->getDoctrine()
		  ->getManager();
    	$prof =  $em
		  ->getRepository('IntranetAdminBundle:Professeur')->find($id)
		;
		 if ($prof == null) {
              // Sinon on déclenche une exception « Accès interdit »
              throw new NotFoundHttpException('Erreur : Identifiant ['.$id.'] inconnu');
        }

        if(!empty($request->request->all())){
        
        	foreach($request->request->all() as $req){
   					$pm = new Profmat();
   					$pm->setProfesseur($prof);
   					$pm->setMatiere(
   						$em->getRepository('IntranetAdminBundle:Matiere')->find($req)
   						);
   					$em->persist($pm);
			}
			$em->flush();
        	

        	return $this->redirect($this->generateUrl('intranet_admin_voir_professeur', 
		      	array('id' => $prof->getId())));
        }
        $tab =array();
        foreach ($em->getRepository('IntranetAdminBundle:Matiere')->findAll() as $key => $value) {
        	if(!$prof->enseigneMatiere($value))
        		$tab[]=$value;
        }
    	return $this->render('IntranetAdminBundle:Professeur:affectermatiere.html.twig', 
    		array(
	      'professeur' => $prof,
	      'matieres' => $tab
	    ));
    }

}