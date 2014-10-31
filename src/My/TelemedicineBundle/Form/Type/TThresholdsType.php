<?php

namespace My\TelemedicineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class TThresholdsType extends AbstractType 
{
    
 
 

    public function buildForm(FormBuilderInterface $builder,array $options)
    {

        
          $builder->add('id_measure', 'measure_selector')
                ->add('maximValue','text')
                ->add('minValue','text')
                ->add('save','submit');
    
    }
    
    function getName() {
        
        return 'TThresholds';
    }
    
  
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

