<?php

namespace App\LouvreBundle\CalculTarif;

use App\LouvreBundle\Entity\Order;
use App\LouvreBundle\Form\OrderType;
use App\LouvreBundle\Entity\Ticket;
use App\LouvreBundle\Form\TicketsType;
use App\LouvreBundle\Form\TicketsListType;
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
  public function findRate()
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
      $dateR = $ticket->getDtNaissance();
      $date = $dateR->diff($datetime);
      $dateFormat = $date->format('%y');
      $difference = intval($dateFormat);
      //dump($session->get('typeBillet')); die();
      if ($ticket->getLowRate() == TRUE){
        $tarif = $tarifReduit;
        if ($session->get('typeBillet') == 2){
          $prix = $prixReduit / 2;
          $ticket->setTicketsRate($tarif); 
          $ticket->setPrix($prix);
        }
        else if ($difference < 12){
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
      else if ($difference < 12){
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
      else if ($difference > 11 && $difference < 60){
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