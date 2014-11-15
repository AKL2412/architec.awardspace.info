<?php

namespace Intranet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Intranet\AdminBundle\Entity\Classe;
use Intranet\AdminBundle\Form\ClasseType;
use Intranet\AdminBundle\Entity\Planning;
use Intranet\AdminBundle\Entity\Seance;
use OC\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use Symfony\Component\HttpKernel\Exception\Exception;
class ClasseController extends Controller{

	public function ajoutAction(Request $request){
    	 // On crée un objet Advert
		    $classe = new Classe();
		    $em = $this->getDoctrine()
								->getManager();
		    $repoAnnee = $em->getRepository('IntranetAdminBundle:Anneescolaire');
			$anneeEncours = $repoAnnee->findOneByEncours(true);

			if ($anneeEncours == null) {
		      // Sinon on déclenche une exception « Accès interdit »
		      throw new NotFoundHttpException('Vueillez parametrer certains paramètres : Année en cours ');
		    }
		    $classe->setAnneescolaire($anneeEncours);
		    $classe->setCreated(new \Datetime());

    		$form = $this->get('form.factory')
    							->create(new ClasseType(), $classe);

		    // $formBuilder = $this->get('form.factory')->createBuilder('form', $classe);

		    // $formBuilder
		    //   ->add('nom',      'text')
		    //   ->add('description',     'textarea')
		    // ;
		 // À partir du formBuilder, on génère le formulaire
		    //$form = $formBuilder->getForm();
		 	if ($form->handleRequest($request)->isValid()) {
		      $em->persist($classe);
		      $em->flush();
		      $request->getSession()->getFlashBag()->add('info', 'Classe bien enregistrée.');

		      // On redirige vers la page de visualisation de l'annonce nouvellement créée
		      return $this->redirect($this->generateUrl('intranet_admin_voir_classe', 
		      	array('id' => $classe->getId())));
		    }
		 	return $this->render('IntranetAdminBundle:Classe:ajout.html.twig', array(
		      'form' => $form->createView()
		    ));
    }

    public function voirAction($id){
    	$classe =  $this->getDoctrine()
		  ->getManager()
		  ->getRepository('IntranetAdminBundle:Classe')
		  ->find($id)
		;
			if ($classe == null) {
	      // Sinon on déclenche une exception « Accès interdit »
	      throw $this->createNotFoundException('Classe [id='.$id.'] inexistant.');
	    }
	    	return $this->render('IntranetAdminBundle:Classe:voir.html.twig', array(
	      'classe' => $classe
	    ));
    }

    public function listAction(Request $request){

    	$em =$this->getDoctrine()->getManager();
		  
    	$anneeEncours = null;
    	if(!empty($request->query->get('annee'))){
    		$anneeEncours = $em->getRepository('IntranetAdminBundle:Anneescolaire')
    							->findOneByAnnee($request->query->get('annee'));
    		if($anneeEncours == null){
    			throw $this->createNotFoundException($request->query->get('annee')." : Incorrect");
    		}
    	}else{
    		$anneeEncours = $em->getRepository('IntranetAdminBundle:Anneescolaire')
    							->findOneByEncours(true);
    		if($anneeEncours == null){
    			throw $this->createNotFoundException("Parametrer l'année scolaire en cours");
    		}
    	}

    	$repository = $em->getRepository('IntranetAdminBundle:Classe');

    	$lastID = 0;
    	if(!empty($request->query->get('id'))){
    		$lastID = $request->query->get('id');
    	}	
    	$classes = $repository->findBy(array('anneescolaire' => $anneeEncours),
						array('created' => 'desc'),30,$lastID);
		  //   	print_r($anneeEncours->getAnnee());
		  //   	echo "<pre>";
		  //   	echo(count($classes));
		  //   	echo "</pre>";
				// die('');
    	return $this->render('IntranetAdminBundle:Classe:list.html.twig', array(
      'classes' => $classes,
      'annee' =>$anneeEncours,
      'annees'=> $em->getRepository('IntranetAdminBundle:Anneescolaire')
    							->findAll(array('id' => 'desc'))
    	));
    }

    public function planningAction($id,Request $request){

    	$planning = new Planning();
		    $em = $this->getDoctrine()
								->getManager();
		    $repoClasse = $em->getRepository('IntranetAdminBundle:Classe');
			$classe = $repoClasse->find($id);

			if ($classe == null) {
		      // Sinon on déclenche une exception « Accès interdit »
		      throw new NotFoundHttpException("La classe d'Identifiant : [id : ".$id."] n'existe pas");
		    }
    	
    	$planning->setClasse($classe);
		$planning->setCreated(new \Datetime());
		$planning->setComplet(false);
		$formBuilder = $this->get('form.factory')->createBuilder('form', $planning);

		$formBuilder
		  	->add('nom',      'text')
		    ->add('datedebut',     'date')
            ->add('datefin',     'date');

        $form = $formBuilder->getForm();
		$form->handleRequest($request);

		 	if ($form->isValid()) {
		      $em->persist($planning);
		      $em->flush();
		      $request->getSession()->getFlashBag()->add('info', 'Emploi de temps bien enregistrée.');

		      // On redirige vers la page de visualisation de l'annonce nouvellement créée
		      return $this->redirect($this->generateUrl('intranet_admin_planning_content', 
		      	array('id' => $planning->getId())));
		    }

    	return $this->render('IntranetAdminBundle:Classe:planning.html.twig', 
    		array(
		      'form' => $form->createView(),
		      'classe'=>$classe
		    ));	
    }

     public function contenuAction($id,Request $request){

    	
		    $em = $this->getDoctrine()
								->getManager();
			$action = 'ajout-contenu';
		    $repoplan = $em->getRepository('IntranetAdminBundle:Planning');
			$plan = $repoplan->find($id);

			if ($plan == null) {
		      // Sinon on déclenche une exception « Accès interdit »
		      throw new NotFoundHttpException("L'emploi de temps d'Identifiant : [id : ".$id."] n'existe pas");
		    }

		    $jours = $plan->lesjours();
			$horaires = $plan->leshoraires();

			
		    
		    if(!empty($request->query->get('action')))
		    	$action = $request->query->get('action');
		    if($plan->getComplet()) $action = 'visionner';

		    $return = array('planning'=>$plan,'em'=>$em,'action'=>$action);
		    if(!$plan->getComplet() || $action == 'ajout-contenu'){
		    	
			    $return = 	array(
			      'planning'=>$plan,
			      'professeurs'=>$em->getRepository('IntranetAdminBundle:Professeur')
			      					->findAll(),
			      'salles'=>$em->getRepository('IntranetAdminBundle:Salle')
			      					->findAll(),
			      'matieres'=>$em->getRepository('IntranetAdminBundle:Matiere')
			      					->findAll(),
			      					'em'=>$em,'action'=>$action
		    );
		    }
		    
		    

		    return $this->render('IntranetAdminBundle:Classe:planning-content.html.twig', 
    		$return);	
	}

	public function professeurMatiereAction($id,Request $request){

		

		return $this->render('IntranetAdminBundle:Classe:prof-de-matiere.html.twig', 
    		array(
    			"matiere"=>$this->getDoctrine()
								->getManager()
								->getRepository('IntranetAdminBundle:Matiere')
								->find($id)
    			));
	}

	public function saveContenuPlanningAction($id,Request $request){

		$em = $this->getDoctrine()
								->getManager();
		$planning = $em->getRepository('IntranetAdminBundle:Planning')
						->find($id);
		
		if(!empty($request->request->all())){

			
			
			try {
				$seance = new Seance();
			$seance->setPlanning($planning);
			$seance->setMatiere(
					$em->getRepository('IntranetAdminBundle:Matiere')
					->find($request->request->get('matiere'))
					);
			$seance->setJour($request->request->get('jour'));
			$seance->setHoraire($request->request->get('heure'));
			if(!empty($request->request->get('salle')))
				$seance->setSalle(
					$em->getRepository('IntranetAdminBundle:Salle')
					->find($request->request->get('salle'))
					);
			if(!empty($request->request->get('professeur')))
				$seance->setProfesseur(
					$em->getRepository('IntranetAdminBundle:Professeur')
					->find($request->request->get('professeur'))
					);
			$em->persist($seance);
			$em->flush();
			echo 'ok';
			} catch (Exception $e) {
				echo $e->getMessage();
			}
			
		}else{
			
			 throw $this->createNotFoundException(
            "Method inappropriée !! "
        	);
		}

		return new Response('');
	}

}