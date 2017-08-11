<?php

namespace App\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppLouvreBundle:Default:index.html.twig');
    }
}
