<?php

namespace My\UserBundle\Listener;
 
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Routing\Router;
 
class LoginListener
{
    
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
 
    public function onInteractiveLogin(InteractiveLoginEvent $event)
    {
      $request = $event->getRequest();
      //$request->getSession()->set('_locale', "es");
     // $request->setLocale($request->getSession()->get('_locale'));


    }
}

