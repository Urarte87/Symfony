<?php

namespace My\TelemedicineBundle\Event;
use Symfony\Component\EventDispatcher\Event;
use My\TelemedicineBundle\Entity\TUsers;

class TUsersEvent extends Event {
    
    
public $user;

public function __construct(Tusers $user) {
    
    $this->user=$user;
    
}

 public function getUser()
    {
        return $this->user;
    }
    
    
    
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

