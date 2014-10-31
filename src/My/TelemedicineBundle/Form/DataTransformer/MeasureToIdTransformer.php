<?php

namespace My\TelemedicineBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use My\TelemedicineBundle\Entity\TMeasures;

class MeasureToIdTransformer implements DataTransformerInterface
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

    /**
     * Transforma un objeto (``TMeasures``) a una cadena (``id``).
     *
     * @param  $measure
     * @return string
     */
    public function reversetransform($Measure)
    {

        return $Measure->getid();
    }

    /**
     * Transforma una cadena (``id``) a un objeto (``TMeasures``).
     *
   
     */
    public function transform($id)
    {
   
        if (!$id) {
            return null;
        }

        $Measure = $this->om
            ->getRepository(':TMeasures')
            ->findOneBy(array('id' => $id))
        ;

        if (null === $Measure) {
            throw new TransformationFailedException(sprintf(
                'A Measure with id "%s" does not exist!',
                $id
            ));
        }

        return $Measure;
      
    }
}
