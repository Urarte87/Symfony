<?php

namespace My\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use My\UserBundle\Entity\User;
use My\UserBundle\Form\UserType;

class DefaultController extends Controller
{
    
    
     private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_insert'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    public function indexAction()
    {
        $entity = new User();
        $form   = $this->createCreateForm($entity);

        return $this->render('MyUserBundle:Default:index.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    
        public function insertAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setRoles("ROLE_USER");
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            return $this->redirect($this->generateUrl('my_user_homepage', array('id' => $entity->getId())));    
           
        }

        
    }
}
