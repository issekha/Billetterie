<?php

namespace App\LouvreBundle\Services;

use App\LouvreBundle\Entity\Reservation;
use App\LouvreBundle\Form\ReservationType;
use App\LouvreBundle\Entity\Ticket;
use App\LouvreBundle\Form\TicketType;
use App\LouvreBundle\Form\TicketsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Symfony\component\HttpFoundation\Session\Session;

class TicketsRate
{
	/**
	* Vérifie si le texte est un spam ou non
	*
	* @param string $text
	* @return bool
	*/
	public function tarif()
	{
		// Tous les tarifs
		$tarif = 0;
		$enfant = 1;
		$normal = 2;
		$senior = 3;
		$tarifReduit = 4;
		$bebe = 5;
		$prixBebe = 0;
		$prixEnfant = 8;
		$prixNormal = 16;
		$prixSenior = 12;
		$prixReduit = 10;

	$session = new Session();
	$session->get('tickets');

	$tickets = $session->get('tickets');
		
	// Calcul des tarifs pour chaque billets	
	foreach ($tickets as $ticket) {

		//Calcul de l'age par rapport à la dateTime
		$datetime = new \DateTime();
		$dateR = $ticket->getBirthDate();
		$date = $dateR->diff($datetime);
		$dateFormat = $date->format('%y');
		$visitorAge = intval($dateFormat);
		
		//Conditions
		if ($ticket->getLowRate() == TRUE){
			$tarif = $tarifReduit;
			
			if ($session->get('ticketsType') == 2){
			  $prix = $prixReduit ;
			  $ticket->setTicketsRate($tarif); 
			  $ticket->setPrix($prix);
			}
			else if ($visitorAge < 12){
				$tarif = $enfant;
					if ($session->get('ticketsType') == 2){
						$prix = $prixEnfant ; 
						$ticket->setPrix($prix);
						$ticket->setTicketsRate($tarif);
					}
				else
				{
					$ticket->setTicketsRate($tarif); 
					$ticket->setPrix($prixEnfant);
				}
			}
			else
			{
			  $ticket->setTicketsRate($tarif); 
			  $ticket->setPrix($prixReduit);
			}

		}
		else if ($visitorAge < 5){
			$tarif = $bebe;
			if ($session->get('ticketsType') == 2){
			  $prix = $prixBebe ; 
			  $ticket->setPrix($prix);
			  $ticket->setTicketsRate($tarif);
			}
			else
			{
			  $ticket->setTicketsRate($tarif); 
			  $ticket->setPrix($prixBebe);
			}
		}
		else if ($visitorAge < 13 && $visitorAge > 4){
			$tarif = $enfant;
			if ($session->get('ticketsType') == 2){
			  $prix = $prixEnfant ; 
			  $ticket->setPrix($prix);
			  $ticket->setTicketsRate($tarif);
			}
			else
			{
			  $ticket->setTicketsRate($tarif); 
			  $ticket->setPrix($prixEnfant);
			}
		}
		else if ($visitorAge > 12 && $visitorAge < 61){
			$tarif = $normal;
			if ($session->get('ticketsType') == 2){
			  $prix = $prixNormal ;
			  $ticket->setPrix($prix);
			  $ticket->setTicketsRate($tarif);
			}
			else
			{
			  $ticket->setTicketsRate($tarif); 
			  $ticket->setPrix($prixNormal);
			}
		}
		else{
			$tarif = $senior;
			if ($session->get('ticketsType') == 2){
			  $prix = $prixSenior ;
			  $ticket->setPrix($prix);
			  $ticket->setTicketsRate($tarif);
			}
			else
			{
			  $ticket->setTicketsRate($tarif); 
			  $ticket->setPrix($prixSenior);
			}
		}
	}

	return $tarif;

	}
}