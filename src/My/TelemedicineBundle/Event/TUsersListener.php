<?php
namespace My\TelemedicineBundle\Event;
use Symfony\Component\EventDispatcher\Event;
use My\TelemedicineBundle\Event\TUsersEvent;
use Symfony\Bridge\Monolog\Logger;


class TUsersListener {

 private $logger;

    function __construct (Logger $logger)
    {
        $this->logger = $logger;
    }

    public function onFooAction(TUsersEvent $event)
    {
       $user=$event->getUser();
       $logger = $this->logger;
       $logger->info("USUARIO: ".$user->getUser()." PASSWORD: ".$user->getPassword()."ID: ".$user->getId());
    }
}