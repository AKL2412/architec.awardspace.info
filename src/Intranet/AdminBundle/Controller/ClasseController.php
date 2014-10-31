<?php

namespace Intranet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Intranet\AdminBundle\Entity\Classe;
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

		    $formBuilder = $this->get('form.factory')->createBuilder('form', $classe);

		    $formBuilder
		      ->add('nom',      'text')
		      ->add('description',     'textarea')
		    ;
		 // À partir du formBuilder, on génère le formulaire
		    $form = $formBuilder->getForm();
		    $form->handleRequest($request);
		 	if ($form->isValid()) {
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
		//$classe->setDatenaissance();
		// echo '<pre>';
		// print_r($classe);
		// echo '</pre>';
		// return new Response('');
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

    	$classes = $repository->findBy(array('anneescolaire' => $anneeEncours),
						array('created' => 'desc'),null,null);
  //   	print_r($anneeEncours->getAnnee());
  //   	echo "<pre>";
  //   	echo(count($classes));
  //   	echo "</pre>";
		// die('');
    	return $this->render('IntranetAdminBundle:Classe:list.html.twig', array(
      'classes' => $classes,
      'annee' =>$anneeEncours,
      'annees'=> $em->getRepository('IntranetAdminBundle:Anneescolaire')
    							->findAll()
    ));
    }

}