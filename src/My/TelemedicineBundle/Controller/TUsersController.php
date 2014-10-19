<?php

namespace My\TelemedicineBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use My\TelemedicineBundle\Entity\TUsers;

use My\TelemedicineBundle\Form\TUsersType;


/**
 * TUsers controller.
 *
 */
class TUsersController extends Controller
{

    /**
     * Lists all TUsers entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyTelemedicineBundle:TUsers')->findAll();

        return $this->render('MyTelemedicineBundle:TUsers:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TUsers entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TUsers();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tusers_show', array('id' => $entity->getId())));
        }

        return $this->render('MyTelemedicineBundle:TUsers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TUsers entity.
     *
     * @param TUsers $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TUsers $entity)
    {
        $form = $this->createForm(new TUsersType(), $entity, array(
            'action' => $this->generateUrl('tusers_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TUsers entity.
     *
     */
    public function newAction()
    {
        $entity = new TUsers();
        $form   = $this->createCreateForm($entity);

        return $this->render('MyTelemedicineBundle:TUsers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TUsers entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyTelemedicineBundle:TUsers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TUsers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyTelemedicineBundle:TUsers:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TUsers entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyTelemedicineBundle:TUsers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TUsers entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyTelemedicineBundle:TUsers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TUsers entity.
    *
    * @param TUsers $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TUsers $entity)
    {
        $form = $this->createForm(new TUsersType(), $entity, array(
            'action' => $this->generateUrl('tusers_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TUsers entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyTelemedicineBundle:TUsers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TUsers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tusers_edit', array('id' => $id)));
        }

        return $this->render('MyTelemedicineBundle:TUsers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TUsers entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyTelemedicineBundle:TUsers')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TUsers entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tusers'));
    }

    /**
     * Creates a form to delete a TUsers entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tusers_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
