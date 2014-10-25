<?php

namespace My\TelemedicineBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TelemedicineBundle\Entity\TUsers;
use My\TelemedicineBundle\Entity\TThresholds;
use My\TelemedicineBundle\Entity\TMeasures;
use My\TelemedicineBundle\Form\Type\TUsersType;
use My\TelemedicineBundle\Form\Type\TThresholdsType;
use My\TelemedicineBundle\Form\Type\TMeasuresType;
use Symfony\Component\HttpFoundation\Request;


use My\TelemedicineBundle\Model\Formularios;





class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyTelemedicineBundle:Default:index.html.twig');
    }
    
    
        public function testAction()
    {
            
         $a=$this->get('my_telemedicine.model.Coche');
         
   
         $b=$a->Arranca();
         echo $b;
         $b=$a->Start();
         echo $b;
         
     
        
       /* $container->setParameter('ruido', 'BRUM');
        $container->setParameter('noise', 'BROOM');
          
        
        
        $container->register('newclass', 'My\TelemedicineBundle\Model\newClass')
                   ->addArgument('%ruido%')
                   ->addArgument('%noise%');*/
        
    
        
        return $this->render('MyTelemedicineBundle:Default:index.html.twig');
    }
    
    
    
        public function telemetryAction()
    {
        $repository = $this->getDoctrine()->getRepository('MyTelemedicineBundle:TMeasures');
        $measures= $repository->findAll();
        return $this->render('MyTelemedicineBundle:Default:telemetry.html.twig',array('measures' => $measures));
    }
    
    
        public function formulariosAction(Request $request)
    {

        $measure = new TMeasures();
        $formMeasure= $this->createForm(new TMeasuresType(), $measure);
        $formMeasure->handleRequest($request);
        
        
       // $formulario = new Formularios($measure,$this->getDoctrine()->getManager());
        
        
        $formulario=$this->get('my_telemedicine.model.Formularios');
        
        $id=$formulario->Valida($formMeasure);
        if ($id) {
             return $this->redirect($this->generateUrl('my_telemedicine_formularios',array('id' => $id)));
        }
        
      
            
    
       return $this->render('MyTelemedicineBundle:Default:formularios.html.twig', array('formMeasure' => $formMeasure->createView()));
    }
}
