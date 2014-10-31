<?php

namespace My\TelemedicineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class TMeasuresType extends AbstractType 
{
    
    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder
                ->add('MeasureName','text')
                ->add('MeasureCode','text')
                ->add('MeasurePicture','text')
                ->add('save','submit');
    
    }
    
    function getName() {
        
        return 'TMeasures';
    }
    
  
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

