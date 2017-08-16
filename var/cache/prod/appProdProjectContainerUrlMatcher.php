<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // mk_louvre_reservation
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mk_louvre_reservation');
            }

            return array (  '_controller' => 'MK\\LouvreBundle\\Controller\\DefaultController::reservationAction',  '_route' => 'mk_louvre_reservation',);
        }

        // mk_louvre_ticket
        if ($pathinfo === '/ticket') {
            return array (  '_controller' => 'MK\\LouvreBundle\\Controller\\DefaultController::ticketAction',  '_route' => 'mk_louvre_ticket',);
        }

        // mk_louvre_recapitulatif
        if ($pathinfo === '/recapitulatif') {
            return array (  '_controller' => 'MK\\LouvreBundle\\Controller\\DefaultController::recapitulatifAction',  '_route' => 'mk_louvre_recapitulatif',);
        }

        // mk_louvre_paiement
        if ($pathinfo === '/paiement') {
            return array (  '_controller' => 'MK\\LouvreBundle\\Controller\\DefaultController::paiementAction',  '_route' => 'mk_louvre_paiement',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
