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





class DefaultController extends Controller
{
    public function indexAction()
    {
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

        //FORMULARIO USUARIOS
        $user = new TUsers();
        $formUser = $this->createForm(new TUsersType(), $user);
        $formUser->handleRequest($request);
        
        if ($formUser->isValid()) {
            $em= $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('my_telemedicine_formularios',array('id' => $user->getId())));
        }
        
        //FORMULARIO THRESHOLDS
        $threshold = new TThresholds();
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
        }
        
        

        return $this->render('MyTelemedicineBundle:Default:formularios.html.twig', array('formMeasure' => $formMeasure->createView(),'form' => $formUser->createView(),'formThreshold' => $formThreshold->createView()));
    }
}
