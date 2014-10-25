<?php

namespace My\TelemedicineBundle\Model;


class Coche
{
    public $ruido;
    public $noise;
    
     function __construct($ruido,$noise) 
    {	
      $this->ruido=$ruido;
      $this->noise=$noise;
    }
   
    public function Arranca()
    {
        return $this->ruido;
    }
    
    public function Start()
    {
      return $this->noise;   
    }
    
  
}
