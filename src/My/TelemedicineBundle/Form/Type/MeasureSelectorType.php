<?php

namespace My\TelemedicineBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use My\TelemedicineBundle\Form\DataTransformer\MeasureToIdTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MeasureSelectorType extends AbstractType
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transformer = new MeasureToIdTransformer($this->om);
        $builder->addModelTransformer($transformer);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'invalid_message' => 'The selected Measure does not exist',
            'class' => 'MyTelemedicineBundle:TMeasures',
            'property' => 'MeasureName'
         ));
   
    }

    public function getParent()
    {
        return 'entity';
    }

    public function getName()
    {
        return 'measure_selector';
    }
}