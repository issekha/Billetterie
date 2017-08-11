<?php

namespace App\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppLouvreBundle:App:index.html.twig');
    }
	
	public function orderAction()
    {
        return $this->render('AppLouvreBundle:App:order.html.twig');
    }
}
