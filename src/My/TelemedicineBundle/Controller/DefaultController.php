<?php

namespace My\TelemedicineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
