<?php

namespace Intranet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Intranet\AdminBundle\Entity\Etudiant;
use Symfony\Component\HttpFoundation\Request;

class EtudiantController extends Controller{

	public function ajoutAction(Request $request)
    {
    	 // On crée un objet Advert
    $etud = new Etudiant();

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form', $etud);

    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $formBuilder
      ->add('datenaissance',      'date')
      ->add('nom',     'text')
      ->add('prenom',   'text')
      ->add('matricule',   'text')
      ->add('email',   'email')
      ->add('telephone',   'text')
    ;
    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

    // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();

    // On fait le lien Requête <-> Formulaire
    // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
    $form->handleRequest($request);

    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
    if ($form->isValid()) {
      // On l'enregistre notre objet $advert dans la base de données, par exemple
      $em = $this->getDoctrine()->getManager();
      $em->persist($etud);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      // On redirige vers la page de visualisation de l'annonce nouvellement créée
      return $this->redirect($this->generateUrl('intranet_admin_voir_etudiant', 
      	array('id' => $etud->getId())));
    }
    

        return $this->render('IntranetAdminBundle:Etudiant:ajout.html.twig', array(
      'form' => $form->createView()
    ));
    }
    public function voirAction($id){
    	$etud =  $this->getDoctrine()
		  ->getManager()
		  ->getRepository('IntranetAdminBundle:Etudiant')
		  ->find($id)
		;
    	return $this->render('IntranetAdminBundle:Etudiant:voir.html.twig', array(
      'etudiant' => $etud
    ));
    }

    public function listAction(){
    	$etud =  $this->getDoctrine()
		  ->getManager()
		  ->getRepository('IntranetAdminBundle:Etudiant')
		  ->findAll()
		;
		/*
		$this->container->get('knp_snappy.image')->generate(
			$this->generateUrl('intranet_admin_voir_etudiant', 
      	array('id' => 1))
			, 'img/image.jpg');
		//*/
/*

$this->get('knp_snappy.pdf')->generateFromHtml(
    $this->renderView(
        'IntranetAdminBundle:Etudiant:list.html.twig',
        array(
            'etudiants' => $etud
        )
    ),
    'file.pdf'
);
//*/

    	return $this->render('IntranetAdminBundle:Etudiant:list.html.twig', array(
      'etudiants' => $etud
    ));
    }
}