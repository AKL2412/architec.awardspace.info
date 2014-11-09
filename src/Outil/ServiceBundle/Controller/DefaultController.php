<?php

namespace Outil\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OutilServiceBundle:Default:index.html.twig', array('name' => $name));
    }

    public function passewordAction(){
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $this->getUser();
        $user->setPlainPassword($_POST['pw']);
        $userManager->updateUser($user);
        return $this->redirect($this->generateUrl($_POST['link']));
     }

    public function pictureAction(Request $request){

    	$em = $this->getDoctrine()->getManager();
    	$user = $this->getUser();
    	$target_dir = "img/profil/";
        //if (!is_dir($target_dir))mkdir($target_dir);
        $namePicture = basename( $_FILES["uploadFile"]["name"]);
        $tabN = explode('.', $namePicture);
        $extension = $tabN[count($tabN)-1];
        $newName = strtolower($_POST['matricule'].'.'.$extension);
        $uploadOk=1;
        $user->setImage($newName);
        /*
        echo "<pre>";
        print_r($_FILES["uploadFile"]);
        print_r($_POST);
        print_r($tabN);
        print_r($user);
        echo "</pre>";
         
        echo "Nom  :".$namePicture.' extension :'.$extension." -- final :".$newName."target_dir :".$target_dir;

        //*/
        $target_dir .= $newName;
        if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) {
            $request->getSession()->getFlashBag()->add('info', 'Image modifiée avec succès');
            $em->persist($user);
             $em->flush();
        } else {
            $request->getSession()->getFlashBag()->add('info', 'La mdofication a échouée !! ');
        }

		 // On redirige vers la page de visualisation de l'annonce nouvellement créée
		return $this->redirect($this->generateUrl($_POST['link']));
        die('');
    }

    public function messageAction(){

        $user = $this->getUser();
        return $this->render('OutilServiceBundle:Default:message.html.twig', 
            array(
                'user' => $user
                )
            );
    }
}
