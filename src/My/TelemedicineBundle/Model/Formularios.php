<?php

namespace My\TelemedicineBundle\Model;
use My\TelemedicineBundle\Entity\TMeasures;
use My\TelemedicineBundle\Form\Type\TMeasuresType;
use Symfony\Component\HttpFoundation\Request;
use My\TelemedicineBundle\Model\Formularios;

class Formularios
{
    
    public $measure;
    public $repository;
   

     function __construct($measure,$repository) 
    {	
        $this->measure=$measure;
        $this->repository=$repository;
    }
   
     
    
    public function Valida($formMeasure) 
    {
         if ($formMeasure->isValid()) {
            $em= $this->repository;
            $em->persist($this->measure);
            $em->flush();
            return $this->measure->getId();
        } 
       
 
     }
       

  
}
