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
use Symfony\Component\EventDispatcher\EventDispatcher;
use My\TelemedicineBundle\Event\AcmeListener;
use My\TelemedicineBundle\Event\TUsersEvent;




class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyTelemedicineBundle:Default:index.html.twig');
    }
    
    
        public function testAction()
    {
            
        
           
        //$dispatcher = new EventDispatcher();
        //$listener = new AcmeListener();
        //$dispatcher->addListener('foo.action', array($listener, 'onFooAction'));
        
       /* $dispatcher->addListener('foo.action', function ($event) {
    echo 'Updating RSS feed' . PHP_EOL;
});*/
        
        
        //$dispatcher->dispatch('foo.action');
         
         /*$a=$this->get('my_telemedicine.model.Coche');
         
   
         $b=$a->Arranca();
         echo $b;
         $b=$a->Start();
         echo $b;*/
         
     
        
       /* $container->setParameter('ruido', 'BRUM');
        $container->setParameter('noise', 'BROOM');
          
        
        
        $container->register('newclass', 'My\TelemedicineBundle\Model\newClass')
                   ->addArgument('%ruido%')
                   ->addArgument('%noise%');*/
        
    
        
        return $this->render('MyTelemedicineBundle:Default:index.html.twig');
    }
    
    
    
        public function telemetryAction()
    {
        //$repository = $this->getDoctrine()->getRepository('MyTelemedicineBundle:TMeasures');
        //$measures= $repository->findAll();
        $measures=$this->get('my_telemedicine.Todasmedidas')->Todos();
        return $this->render('MyTelemedicineBundle:Default:telemetry.html.twig',array('measures' => $measures));
    }
    
    
        public function formulariosAction(Request $request)
    {

        //FORMULARIO THRESHOLDS
       /* $threshold = new TThresholds();
        $formThreshold = $this->createForm(new TThresholdsType(), $threshold);
        $formThreshold->handleRequest($request);
        
        if ($formThreshold->isValid()) {
            $em= $this->getDoctrine()->getManager();
            $em->persist($threshold);
            $em->flush();
           
            return $this->redirect($this->generateUrl('my_telemedicine_formularios',array('id' => $threshold->getId())));
        }
        
        
        //FORMULARIO MEASURES
        $measure = new TMeasures();
        $formMeasure= $this->createForm(new TMeasuresType(), $measure);
        $formMeasure->handleRequest($request);
        
        if ($formMeasure->isValid()) {
            $em= $this->getDoctrine()->getManager();
            $em->persist($measure);
            $em->flush();
            return $this->redirect($this->generateUrl('my_telemedicine_formularios',array('id' => $measure->getId())));
        }*/

       /* $dispatcher = new EventDispatcher();
        $listener = new AcmeListener();
        $dispatcher->addListener('foo.action', array($listener, 'onFooAction'));*/
        

  
        //FORMULARIO USUARIOS
        $user = new TUsers();
        $formUser = $this->createForm(new TUsersType(), $user);
        $formUser->handleRequest($request);
        
        if ($formUser->isValid()) {
            $em= $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->get('event_dispatcher')->dispatch('foo.action',new TUsersEvent($user));
            
            //$dispatcher->dispatch('foo.action',$event);
           // return $this->redirect($this->generateUrl('my_telemedicine_formularios',array('id' => $user->getId())));
        }
        
      
            
    
       return $this->render('MyTelemedicineBundle:Default:formularios.html.twig', array('form' => $formUser->createView()));
    }
}
