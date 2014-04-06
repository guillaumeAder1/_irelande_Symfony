<?php

namespace Akm\helloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AkmhelloBundle:Default:index.html.twig', array('name' => $name));
    }
    public function sexeAction($name , $sexe)
    {
    	// Appel le template Derfault / index.html.twig
    	return $this->render('AkmhelloBundle:Default:base.html.twig', array('name' => $name , 'sexe' => $sexe));
    	
    	// Object response retourne un message HTML sans appeler de Template    	
    	//return new Response('Hello <strong>' . $name . "</strong> votre sexe est :  <strong>" . $sexe  ."</strong>");
//     	$myRequest = new Response('Hello <strong>' . $name . "</strong> votre sexe est :  <strong>" . $sexe  ."</strong>");
//     	return $myRequest;
    	
    }
}
