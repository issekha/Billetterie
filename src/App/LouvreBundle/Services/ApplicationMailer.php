<?php

namespace App\LouvreBundle\Services;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\LouvreBundle\Controller\DefaultController;
use Symfony\component\HttpFoundation\Session\Session;

class ApplicationMailer
{

  public function sendEmail($mailBodyHTML, $mailer)
  {
    $session = new Session();


      //  Envoie d'email
      $message = \Swift_Message::newInstance();
      $message->setSubject("Votre réservation pour le musée du Louvre");
      $message->setFrom('dsetdb@gmail.com');
      $message->setTo($session->get('email'));
      // pour envoyer le message en HTML
      $message->setBody(
          $mailBodyHTML,
          'text/html');
      //envoi du message
      $mailer->send($message);
  }
}
