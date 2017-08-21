<?php

namespace App\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;



class AppController extends Controller
{
	//Homepage
	public function indexAction()
	{
		return $this->render('AppLouvreBundle:App:index.html.twig');
	}
	

   
	// Etape 4 Confirmation de la commande
	public function confirmAction()
  {
    return $this->render('AppLouvreBundle:App:confirm.html.twig');
  }
}
