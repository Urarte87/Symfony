<?php

namespace My\TelemedicineBundle\Model;
use Doctrine\Common\Persistence\ObjectManager;

class Measures
{
    private $repository;
    
     function __construct(ObjectManager $om) 
    {	
      $this->repository=$om->getRepository('MyTelemedicineBundle:TMeasures');
    }
   
    public function Todos()
    {
        return $this->repository->findAll();
    }
    

    
  
}

