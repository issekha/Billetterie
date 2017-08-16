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
    $tarif = 0;
    $enfant = 1;
    $normal = 2;
    $senior = 3;
    $tarifReduit = 4; 
    $prixEnfant = 8;
    $prixNormal = 16;
    $prixSenior = 12;
    $prixReduit = 10;

    $session = new Session();
    $session->get('tickets');

    $tickets = $session->get('tickets');

    foreach ($tickets as $ticket) {

      $datetime = new \DateTime();
      $dateR = $ticket->getBirthDate();
      $date = $dateR->diff($datetime);
      $dateFormat = $date->format('%y');
      $visitorAge = intval($dateFormat);
      //dump($session->get('typeBillet')); die();
      if ($ticket->getLowRate() == TRUE){
        $tarif = $tarifReduit;
        if ($session->get('typeBillet') == 2){
          $prix = $prixReduit / 2;
          $ticket->setTicketsRate($tarif); 
          $ticket->setPrix($prix);
        }
        else if ($visitorAge < 12){
          $tarif = $enfant;
          if ($session->get('typeBillet') == 2){
            $prix = $prixEnfant / 2; 
            $ticket->setPrix($prix);
            $ticket->setTicketsRate($tarif);
          }
          else{
            $ticket->setTicketsRate($tarif); 
            $ticket->setPrix($prixEnfant);
          }
        }
        else{
          $ticket->setTicketsRate($tarif); 
          $ticket->setPrix($prixReduit);
        }

      }
      else if ($visitorAge < 12){
        $tarif = $enfant;
        if ($session->get('typeBillet') == 2){
          $prix = $prixEnfant / 2; 
          $ticket->setPrix($prix);
          $ticket->setTicketsRate($tarif);
        }
        else{
          $ticket->setTicketsRate($tarif); 
          $ticket->setPrix($prixEnfant);
        }
      }
      else if ($visitorAge > 11 && $visitorAge < 60){
        $tarif = $normal;

        if ($session->get('typeBillet') == 2){
          $prix = $prixNormal / 2;
          $ticket->setPrix($prix);
          $ticket->setTicketsRate($tarif);
        }
        else{
          $ticket->setTicketsRate($tarif); 
          $ticket->setPrix($prixNormal);
        }
      }
      else{
        $tarif = $senior;

        if ($session->get('typeBillet') == 2){
          $prix = $prixSenior / 2;
          $ticket->setPrix($prix);
          $ticket->setTicketsRate($tarif);
        }
        else{
          $ticket->setTicketsRate($tarif); 
          $ticket->setPrix($prixSenior);
        }
      }
    }

    return $tarif;

  }
}