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
use App\LouvreBundle\Form\TicketType;
use App\LouvreBundle\Form\TicketsListType;

class AppController extends Controller
{
	//Homepage
	public function indexAction()
	{
		return $this->render('AppLouvreBundle:App:index.html.twig');
	}
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

	//Etape 2 création de billet
    public function ticketAction(Request $request)
    {
	    $order = new Order();
	    $session = new Session();

    	$i = 0;

    	//Créer autant de formulaire que de nombre de billet demandé.
	    while ($i != $session->get('ticketsNbr')){
	    	$ticket = new Ticket();
	    	$ticket->setOrder($order);

		    $ticket->setTicketsRate(0);
	    	$order->getTickets()->add($ticket);
	    	
	    	$i++;    
	    }
		//Récuperer données de session.
	    $order->setVisitDate($session->get('visitDate'));
	    $order->setEmail($session->get('email'));
	    //formulaire array de touts les billets    	
	    $form   = $this->get('form.factory')->create(TicketsListType::class, $order);
 
	    $tickets = $order->getTickets();

	    $form->handleRequest($request);
	    if ($form->isSubmitted() && $form->isValid()) {
	    	$session = new Session();
	      	$session->set('tickets', $tickets);
	      	$redirection    = $this->redirectToRoute('app_louvre_ticket');
			// vers récapitulatif de la commande
			return $this->redirectToRoute('app_louvre_resume');
			
		}
		// vers formulaire de billet.
        return $this->render('AppLouvreBundle:App:ticket.html.twig', array(
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

	    $prix = 0;
	    foreach ($session->get('tickets') as $tickets) {
	    	$tickets->getPrix();
	    	$prix += $tickets->getPrix();
	    }

	    $session->set('prix', $prix);
		//Vers récapitulatif de la commande.
        return $this->render('AppLouvreBundle:App:resume.html.twig', array(
	      'email' => 					$session->get('email'),
	      'date_reservation' => 		$session->get('visitDate'),
	      'type_billet'		 =>			$session->get('ticketsType'),
	      'nombre_billet'	 =>			$session->get('ticketsNbr'),
	      'orderCode'		 =>			$session->get('orderCode'),
	      'nom'				 =>			$session->get('tickets'),
	      'total'			 =>			$prix,
	    ));
    }

    public function paiementAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$order = new Order();
    	$session = new Session();
		 
    	$prix = $session->get('prix');
		$email = $session->get('email');

        if ($request->isMethod('POST')) {
            $token = $request->request->get('stripeToken');

            //insertion des informations en BDD
            $order->setVisitDate($session->get('visitDate'));
            $order->setTicketsType($session->get('ticketsType'));
            $order->setTicketsNbr($session->get('ticketsNbr'));
            $order->setEmail($session->get('email'));
            $order->setOrderCode($session->get('orderCode'));
            
            foreach ($session->get('tickets') as $value) {
            	$ticket = new Ticket();
            	$ticket->setName($value->getName());
            	$ticket->setFirstName($value->getFirstName());
            	$ticket->setBirthDate($value->getBirthDate());
            	$ticket->setLowRate($value->getLowRate());
            	$ticket->setTicketsRate($value->getTicketsRate());
            	$ticket->setPays($value->getPays());
            	$ticket->setPrix($value->getPrix());
            	$ticket->setOrder($order);

            	$em->persist($ticket);
            }
            $em->persist($order);
            $em->flush();

            //Boucle pour récupérer le prix total

            $prixTotal = 0;
           	foreach ($session->get('tickets') as $tickets) {
		    	$tickets->getPrix();
		    	$prixTotal += $tickets->getPrix();
		    }

		    $session->set('prixTotal', $prixTotal);

		    $mailer = $this->get('mailer');
		    $mailBodyHTML = $this->render('AppLouvreBundle:App:email.html.twig', [
				'email'               =>     $session->get('email'),
				'date_reservation'    =>     $session->get('visitDate'),
				'type_billet'         =>     $session->get('ticketsType'),
				'nombre_billet'       =>     $session->get('ticketsNbr'),
				'orderCode'           =>     $session->get('orderCode'),
				'nom'                 =>     $session->get('tickets'),
				'total'               =>     $session->get('prixTotal'),
	        ])->getContent();

		    $email = $this->container->get('app_louvre.email');
		    $email->sendEmail($mailBodyHTML, $mailer);
			
			//Service Stripe
            \Stripe\Stripe::setApiKey("sk_test_8vdRwzS3fzDSSYAyG6I8VQir");
            \Stripe\Charge::create(array(
				"amount" => $prix * 100,
				"currency" => "eur",
				"source" => $token,
				"description" => "Billet de reservation",
				"receipt_email" => "email",
              ));

            $session->getFlashBag()->add('success', 'Paiement validé !');
            $session->clear();
            return $this->redirectToRoute('app_louvre_order');
        }

        return $this->render('AppLouvreBundle:App:paiement.html.twig', array(
	      'prix'			=>			$prix,
		  'email'			=>			$email,

	      
	    ));
    }
}
