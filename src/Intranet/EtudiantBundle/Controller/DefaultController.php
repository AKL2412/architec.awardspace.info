<?php

namespace Intranet\EtudiantBundle\Controller;
use Intranet\AdminBundle\Entity\Etudiant;
use OC\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IntranetEtudiantBundle:Default:index.html.twig');
    }

    public function compteAction()
    {
    	$em = $this->getDoctrine()
								->getManager();
		$user = $this->getUser();
		$etudiantRepository = $em->getRepository('IntranetAdminBundle:Etudiant');
		$etudiant = $etudiantRepository->findOneByCompte($user);
    	
		if ($etudiant == null) {
		      // Sinon on déclenche une exception « Accès interdit »
		      throw new NotFoundHttpException('Veuillez parametrer certains paramètres : Année en cours ');
		}

        return $this->render('IntranetEtudiantBundle:Default:compte.html.twig',
        	array(
        		"compte"=>$user,
        		"etudiant"=>$etudiant
        		));
    }

    public function classeAction($id){

        $em =$this->getDoctrine()->getManager();

        $user = $this->getUser();

        $etudiant = $em->getRepository('IntranetAdminBundle:Etudiant')
                                ->findOneByCompte($user);
        if ($etudiant == null) {
              // Sinon on déclenche une exception « Accès interdit »
              throw new NotFoundHttpException('Erreur : Compte utilisateur inconnu ');
        }

        $classe = $em->getRepository('IntranetAdminBundle:Classe')
                                ->find($id);
        if ($classe == null) {
              // Sinon on déclenche une exception « Accès interdit »
              throw new NotFoundHttpException('Erreur : Classe [id : '.$id."] n'existe pas ");
        }
        return $this->render('IntranetEtudiantBundle:Default:classe.html.twig',
            array(
                "etudiant"=>$etudiant,
                "classe"=>$classe
                ));
    }

    public function classeActuelleAction(){

        $em =$this->getDoctrine()->getManager();

        $user = $this->getUser();

        $etudiant = $em->getRepository('IntranetAdminBundle:Etudiant')
                                ->findOneByCompte($user);
        if ($etudiant == null) {
              // Sinon on déclenche une exception « Accès interdit »
              throw new NotFoundHttpException('Erreur : Compte utilisateur inconnu ');
        }

        $classe = $etudiant->classeActuelle();

        if ($classe == null) {
              // Sinon on déclenche une exception « Accès interdit »
              throw new NotFoundHttpException("Votre classe actuelle (Année scolaire en cours) n'est pas encore définie");
        }
        return $this->render('IntranetEtudiantBundle:Default:classe.html.twig',
            array(
                "etudiant"=>$etudiant,
                "classe"=>$classe->getClasse()
                ));
    }

    public function emploitdetempsCAAction(){

        $em =$this->getDoctrine()->getManager();

        $user = $this->getUser();

        $etudiant = $em->getRepository('IntranetAdminBundle:Etudiant')
                                ->findOneByCompte($user);
        if ($etudiant == null) {
              // Sinon on déclenche une exception « Accès interdit »
              throw new NotFoundHttpException('Erreur : Compte utilisateur inconnu ');
        }

        $classe = $etudiant->classeActuelle();

        if ($classe == null) {
              // Sinon on déclenche une exception « Accès interdit »
              throw new NotFoundHttpException("Votre classe actuelle (Année scolaire en cours) n'est pas encore définie");
        }
        $jours = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');
        $horaires = array('8h-10h','10h-12h','14h-16h','16h-18h');
                
        return $this->render('IntranetEtudiantBundle:Default:classe.html.twig',
            array(
                "etudiant"=>$etudiant,
                "classe"=>$classe->getClasse(),
                "emploiDeTemps"=>"definie",
                "jours"=>$jours,
                "heures"=>$horaires
                ));
    }
    public function messageAction(Request $request){
      
        $data = array();

        $user = $this->getUser();
        
        $etudiant = $this->getDoctrine()
                                ->getManager()->getRepository('IntranetAdminBundle:Etudiant')
                                ->findOneByCompte($user);
        
        if ($etudiant == null) {
              // Sinon on déclenche une exception « Accès interdit »
              throw new NotFoundHttpException('Erreur : Compte utilisateur inconnu ');
        }


        if (!empty($request->query->get('rubrique'))) {

           $rubrique = $request->query->get('rubrique');

           if($rubrique == 'boite-reception'){
                $data = array("leon","aby");
           }else if($rubrique == 'message-envoyes'){

           }else if($rubrique == 'contact'){

           }

        }else{
            $rubrique = 'boite-reception';
        }
       // die('');
        
        
        return $this->render('IntranetEtudiantBundle:Default:message.html.twig', 
            array(
                'user' => $user,
                'rubrique'=>$rubrique,
                'etudiant'=>$etudiant,
                'data'=>$data
                )
            );
    }
}
