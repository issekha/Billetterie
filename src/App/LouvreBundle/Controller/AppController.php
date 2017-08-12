<?php

namespace App\LouvreBundle\Controller;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\LouvreBundle\Entity\Order;
use App\LouvreBundle\Entity\Ticket;
use App\LouvreBundle\Form\OrderType;
use App\LouvreBundle\Form\TicketsType;
use App\LouvreBundle\Form\TicketsListType;

class AppController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppLouvreBundle:App:index.html.twig');
    }
	
	public function orderAction(Request $request)
    {
         $order = new Order();
	    $form = $this->get('form.factory')->create(OrderType::class, $order);
	      		
	    $form->handleRequest($request);
	    if ($form->isSubmitted() && $form->isValid()) {
	    	$em 			= $this->getDoctrine()->getManager();
	    	$redirection    = $this->redirectToRoute('app_louvre_ticket');

			//appel du service billet pour bloquer les reservations billet journée de la date du jour après 14h, service limitation nombre de billet et service reference
			$blockTicket = $this->container->get('app_louvre.time');
			$limite = $this->container->get('app_louvre.limit');
	    	$orderCode = $this->container->get('app_louvre.orderCode');

	    	//appel de la session
			$session = new Session();

			//insertion élément en session
			$session->set('ticketsNbr', $order->getTicketsNbr());

			//Service limitation de billet;
			$session->set('visitDate', $order->getVisitDate());
			$session->set('ticketsType', $order->getTicketsType());
			//condition pour limitation nombre de billet
			if (!$limite->limit($em, $redirection)){
				//condition pour bloquer les reservations de la date du jour après 14h
				if (!$blockTicket->validTickets($redirection)){

					
					$session->set('orderCode', $orderCode->generateur());
					return $this->redirectToRoute('app_louvre_ticket');
					
				}
			}	 
	    }
        return $this->render('AppLouvreBundle:App:order.html.twig', array(
	      'form' => $form->createView(),    
	    ));
    }
	
	 public function ticketAction(Request $request)
	 {
		
	    $order = new Order();

	   
	    $session = new Session();

    	$i = 0;

    	//boucle pour le nombre de formulaire que le nombre de billet demandé
	    while ($i != $session->get('ticketsNbr')){
	    	$ticket = new Ticket();
	    	$ticket->setOrder($order);

		    $ticket->setTicketsRate(0);
	    	$order->getTickets()->add($ticket);
	    	
	    	$i++;    
	    }

	    $order->setVisitDate($session->get('visitDate'));
	    $order->setEmail($session->get('email'));
	        	
	    $form   = $this->get('form.factory')->create(TicketsListType::class, $order);
 
	    $tickets = $order->getTickets();

	    $form->handleRequest($request);
	    if ($form->isSubmitted() && $form->isValid()) {
	    	$session = new Session();
	      	$session->set('tickets', $tickets);
	      	$redirection    = $this->redirectToRoute('app_louvre_ticket');
			
			return $this->redirectToRoute('app_louvre_resum');
			
		}

        return $this->render('AppLouvreBundle:App:ticket.html.twig', array(
	      'form' => $form->createView(),
	      
	    ));
	 }
	
	public function resumAction(Request $request)
	{
		return $this->render('AppLouvreBundle:App:resum.html.twig');
	}
		 
}
