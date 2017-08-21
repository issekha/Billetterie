<?php

namespace App\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\component\HttpFoundation\Session\Session;
use App\LouvreBundle\Entity\Order;
use App\LouvreBundle\Form\OrderType;
use App\LouvreBundle\Entity\Ticket;


class OrderController extends Controller
{
	//Etapes 1 création de la commande
	public function orderAction(Request $request)
    {
		//Formulaire nouvelle commande
		$order = new Order();
		$form = $this->get('form.factory')->create(OrderType::class, $order);

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$em 			= $this->getDoctrine()->getManager();
			$redirection    = $this->redirectToRoute('app_louvre_order');

			//Appel des services pour verifier les condition et attribuer un code de commande.
			$stopTicket = $this->container->get('app_louvre.time');
			$limite = $this->container->get('app_louvre.limit');
			$orderCode = $this->container->get('app_louvre.orderCode');


			$session = new Session();


			$session->set('ticketsNbr', $order->getTicketsNbr());
			$session->set('visitDate', $order->getVisitDate());
			$session->set('ticketsType', $order->getTicketsType());
			
			//Pas plus de 1000 billets/jours.
			if (!$limite->limit($em, $redirection)){
				//Pas de billet journée après 14h.
				if (!$stopTicket->ticketsValid($redirection)){

					$session->set('email', $order->getEmail());
					$session->set('orderCode', $orderCode->generateur());
					// Vers formulaire de billet
					return $this->redirectToRoute('app_louvre_ticket');
				}
			}	 
	    }
		//Vers formulaire de commande
        return $this->render('AppLouvreBundle:App:order.html.twig', array(
	      'form' => $form->createView(),    
	    ));
    }

	

	//Etape 3 Récapitulatif de la commande
    public function resumeAction(Request $request)
    {

	    $order = new Order();
	    $ticket = new Ticket();
	    $session = new Session();

	    //Calcul du tarif de chaque billet (service).
	    $calculTarif = $this->container->get('app_louvre.rate');

	    $calculTarif->tarif();

	    //Calcul du prix total.

	    $prixTotal = 0;
		$prix = 0;
	    foreach ($session->get('tickets') as $tickets) {
	    	$tickets->getPrix();
			$prix = $tickets->getPrix();
	    	$prixTotal += $tickets->getPrix();
	    }

	    $session->set('prix', $prix);
		$session->set('prixTotal', $prixTotal);
		//Vers récapitulatif de la commande.
        return $this->render('AppLouvreBundle:App:resume.html.twig', array(
			'email' => 					$session->get('email'),
			'date_reservation' => 		$session->get('visitDate'),
			'type_billet'		 =>			$session->get('ticketsType'),
			'nombre_billet'	 =>			$session->get('ticketsNbr'),
			'orderCode'		 =>			$session->get('orderCode'),
			'nom'				 =>			$session->get('tickets'),
			'total'			 =>			$prixTotal,
			'prix'			=>			$prix,
	    ));
		
		
		
    }
	
	
	

}

