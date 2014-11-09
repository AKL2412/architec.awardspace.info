<?php

namespace Internet\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Internet\siteBundle\Entity\Newsletter;
use Internet\siteBundle\Entity\Preinscription;
use Internet\siteBundle\Form\PreinscriptionType;

class SiteController extends Controller
{
    public function indexAction(Request $request)
    {
    	$newsletter = new Newsletter();
    	$formBuilderNewsletter = $this->get('form.factory')->createBuilder('form', $newsletter);

    	$formBuilderNewsletter
		      ->add('email',      'email');
		$formNewsletter = $formBuilderNewsletter->getForm();

    	
    	/*
    	**	Preincription
    	*/

    	$preinscription = new Preinscription();

    	$preType =  $this->container->get('internetsite.preinscription'); 
    	$formPreinscription = $this->get('form.factory')
    							->create($preType, $preinscription);


        return $this->render('InternetsiteBundle:Default:index.html.twig',
        	array(
        		'formNewsletter' => $formNewsletter->createView(),
        		'formPreinscription' => $formPreinscription->createView()
        		)
        	);
    }

    public function addemailAction(Request $request){

    	$em = $this->getDoctrine()->getManager();

    	$newsletter = new Newsletter();
    	$formBuilderNewsletter = $this->get('form.factory')->createBuilder('form', $newsletter);

    	$formBuilderNewsletter
		      ->add('email',      'email');
		$formNewsletter = $formBuilderNewsletter->getForm();
		$formNewsletter->handleRequest($request);
		 	if ($formNewsletter->isValid()) {
		 		$newsletter->setDate(new \Datetime());

			 	if($em->getRepository('InternetsiteBundle:Newsletter')
			 		->findOneByEmail($newsletter->getEmail()) != null){

			 		
			 		$request->getSession()->getFlashBag()->add('info', "L'email saisi a déjà été enregistré");
			      	$request->getSession()->getFlashBag()->add('class', 'alert-danger');
			 	}else{

			 		$em->persist($newsletter);
		      	 	$em->flush();
				 	$request->getSession()->getFlashBag()->add('info', 'Email enregistré avec succès');
				    $request->getSession()->getFlashBag()->add('class', 'alert-success');
			 	}
		      
		    }
    	return $this->redirect($this->generateUrl('internetsite_homepage'));
    }

    public function preinscrireAction(Request $request){
    	$em = $this->getDoctrine()->getManager();
    	$preinscription = new Preinscription();

    	$preType =  $this->container->get('internetsite.preinscription'); 
    	$formPreinscription = $this->get('form.factory')
    							->create($preType, $preinscription);

    	if ($formPreinscription->handleRequest($request)->isValid()) {

    		
    		$preinscription->setDate(new \DateTime());
    		$preinscription->setTraite(false);
    		$em->persist($preinscription);
    		$em->flush();

    		$request->getSession()->getFlashBag()->add('info', 'Votre preinscription a été enregistrée avec 
    			succès, Une réponse vous sera envoyée par e-mail');
			$request->getSession()->getFlashBag()->add('class', 'alert-success');
    		
    	}	
    	return $this->redirect($this->generateUrl('internetsite_homepage'));
    }
}
