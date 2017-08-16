<?php
namespace App\LouvreBundle\Services;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\LouvreBundle\Controller\DefaultController;
use Symfony\component\HttpFoundation\Session\Session;

class ValidLimit
{
  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function limit($em, $redirection)
  {
    $session = new Session();
    //repository de réservation
    $repository = $em->getRepository('AppLouvreBundle:Order');
    $limitation = $repository->OrderLimit($session->get('visitDate'));
    //boucle pour limiter le nombre de billet par rapport au nombre de billet pour la date
    foreach ($limitation as $key => $limit) {
      
      foreach ($limit as $key => $lim) {
        
        $lim = intval($lim);
        
        $lim1 = $lim + $session->get('ticketsNbr');
        if ($lim1 > 5){
          $session->clear();
          $session->getFlashBag()->add('errors', 'Veuillez choisir une autre date, cette date est pleine');
          return $redirection;
        }
        else{
          return 0;
        }
      }
    }
  }
}