<?php

namespace App\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\component\HttpFoundation\Session\Session;
use App\LouvreBundle\Entity\Order;
use App\LouvreBundle\Entity\Ticket;
use Stripe\Stripe;
use stripe\Charge;
use Stripe\Error\Card;

class PaiementController extends Controller
{
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
			$token = $_POST['stripeToken'];

			$charge = \Stripe\Charge::create([
				"amount" => $prix * 100,
				"currency" => "eur",
				"description" => "Billetterie musée du Louvre",
				"source" => $token,

			  ]);

			$session->getFlashBag()->add('success', 'Votre commande a été validée, vous recevrez vos billets par email, Merci de votre achat.');
			$session->clear();
			return $this->redirectToRoute('app_louvre_confirm');
		}

		return $this->render('AppLouvreBundle:App:resume.html.twig', array(
		  'prix'			=>			$prix,
		  'email'			=>			$email,


		));
	}
}
   
