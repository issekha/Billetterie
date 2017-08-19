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

        // app_louvre_homePage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_louvre_homePage');
            }

            return array (  '_controller' => 'App\\LouvreBundle\\Controller\\AppController::indexAction',  '_route' => 'app_louvre_homePage',);
        }

        if (0 === strpos($pathinfo, '/step')) {
            // app_louvre_order
            if ($pathinfo === '/step/1') {
                return array (  '_controller' => 'App\\LouvreBundle\\Controller\\AppController::orderAction',  '_route' => 'app_louvre_order',);
            }

            // app_louvre_ticket
            if ($pathinfo === '/step/2') {
                return array (  '_controller' => 'App\\LouvreBundle\\Controller\\AppController::ticketAction',  '_route' => 'app_louvre_ticket',);
            }

            // app_louvre_resume
            if ($pathinfo === '/step/3') {
                return array (  '_controller' => 'App\\LouvreBundle\\Controller\\AppController::resumeAction',  '_route' => 'app_louvre_resume',);
            }

            // app_louvre_paiement
            if ($pathinfo === '/step/4') {
                return array (  '_controller' => 'App\\LouvreBundle\\Controller\\AppController::paiementAction',  '_route' => 'app_louvre_paiement',);
            }

        }

        // app_louvre_translation
        if (0 === strpos($pathinfo, '/traduction') && preg_match('#^/traduction/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_louvre_translation')), array (  '_controller' => 'App\\LouvreBundle\\Controller\\AppController::translationAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
