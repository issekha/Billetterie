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


class TicketController extends Controller
{
	
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
	
}

