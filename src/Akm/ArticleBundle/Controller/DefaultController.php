<?php

namespace Akm\ArticleBundle\Controller;

use Akm\ArticleBundle\Entity\Article;
use Akm\ArticleBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	private static $_compteur = 0;
	
    public function indexAction($name)
    {
        return $this->render('AkmArticleBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function addarticleAction($articleName){
    	//$book = new 
    	//return $this->render('AkmArticleBundle:Default:addarticle.html.twig', array('articleName' => $articleName));
    	$article = new Article();
    	$article->setIsbn('9782070752447');
    	$article->setTitle($articleName);
    	$article->setSummary('Martine...., un nouveau monde commence...');
    	
    	$em = $this->getDoctrine()->getEntityManager();
    	$em->persist($article);
    	$em->flush();
    	 
    	return new Response('Identifiant de l\'article ajouté : '.$article->getId());
    	 
    }
    public function addUserAction($newUser){
    	self::$_compteur++;
    	$user = new User();
    	$user->setName($newUser);
    	$user->setLastName("last name + " . DefaultController::getCompteur() );
    	// bdd
    	$em = $this->getDoctrine()->getEntityManager();
    	$em->persist($user);
    	$em->flush();    	
    	return new Response('nouvel utilisateur : '.$user->getId());
    }
    public function showUserAction($idUser){
    	$userRepository = $this->getDoctrine()->getRepository('AkmArticleBundle:User');
    	$user = $userRepository->find($idUser);
    	if (!$user) {
    		throw $this->createNotFoundException('Aucun Utilisateur ne
    				correspond à l\'id '.$idUser);
    	}
    	return new Response('User consulté : ' . $user->getName() . ' /// lasteName : ' . $user->getLastName() . ' ID--> ' . $user->getId() );
    	 
    	  	
    }
    public static function getCompteur() // Méthode statique qui renverra la valeur du compteur.
    {
    	return self::$_compteur;
    }
}
