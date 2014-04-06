<?php

namespace Akm\helloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ZelloController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AkmhelloBundle:Zello:index.html.twig', array('name' => $name));
        					// AkmhelloBundle : Zello/Default = le nom du REPERTOIRE du template twig à appeler //
        					// + index.twig.html nom du FICHIER dans le repertoire
    }
    public function homeAction()
    {
    	return $this->render('AkmhelloBundle:Zello:base.html.twig');
    	// AkmhelloBundle : Zello/Default = le nom du REPERTOIRE du template twig à appeler //
    	// + index.twig.html nom du FICHIER dans le repertoire
    }
}

/*	--> Dans routing : 
 * 		- Patern = motif de l'URL ex : hello + / + 1 paramètre
 * 		- Default = 
 * 			- controller : nom du bundle + NOM du CONTROLLEUR (Default ou Zello) situés dans ----> Akm/helloBundle/Constoller/
 * 			- action : FUNCTION a executer
 * 	
 * 	Dans chaque controller on peut appler plusieurs templates pr le rendu VOIR SUR LE CODE CI-DESSUS function $this->render
 * 
 * 
 * 
 * */