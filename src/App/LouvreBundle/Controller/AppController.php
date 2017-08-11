<?php

namespace App\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\LouvreBundle\Entity\Order;
use App\LouvreBundle\Entity\Ticket;
use App\LouvreBundle\Form\OrderType;

class AppController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppLouvreBundle:App:index.html.twig');
    }
	
	public function orderAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ticketRepo = $em->getRepository('AppLouvreBundle:Ticket');

        $order = new Order();
        $form = $this->get('form.factory')->create(OrderType::class, $order);

        if ($ticketRepo->getNbTicketsPerDay() >= 1000) {
            $request->getSession()->getFlashBag()->add('warning','Tous les tickets pour aujourd\'hui ont été vendus.');
            return $this->render('AppLouvreBundle:App:order.html.twig', [
                'form' => $form->createView(),
            ]);
        }
		
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
		{
			$order->setVisitDate();
			$order->setTicketsType();
			$order->setNbTickets();
			return $this->redirectToRoute('app_louvre_ticket', compact('order'));
		}
		
		return $this->render('AppLouvreBundle:App:order.html.twig', ['form' => $form->createView()]);
    }
}
