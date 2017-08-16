<?php
namespace App\LouvreBundle\Services;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\LouvreBundle\Controller\DefaultController;
use Symfony\component\HttpFoundation\Session\Session;

class ValidTime
{
  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function ticketsValid($redirection)
  {
    $datetime = new \DateTime();
    $session = new Session();
    $jour = $session->get('visitDate')->format('j');
    $mois = $session->get('visitDate')->format('m');
    $annee = $session->get('visitDate')->format('Y');
    if($session->get('typeBillet') == 1){

      if ($datetime->format('j') == $jour){

        if($datetime->format('m') == $mois){

          if($datetime->format('Y') == $annee){

            if($datetime->format('H') > 13){
              
              $session->clear();
              $session->getFlashBag()->add('errors', 'Erreur impossible de prendre un billet journée il est plus de 14h');
              return $redirection;
            }
            else{
              return 0;
            }
          }
          else{
            return 0;
          }
        }
        else{
          return 0;
        }
      }
      else{
        return 0;
      }
    }
    else{
      return 0;
    }
  }
}