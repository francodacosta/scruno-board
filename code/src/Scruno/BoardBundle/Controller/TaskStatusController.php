<?php

namespace Scruno\BoardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Scruno\BoardBundle\Entity\TaskStatus;
use Scruno\BoardBundle\Form\TaskStatusType;

/**
 * TaskStatus controller.
 *
 */
class TaskStatusController extends Controller
{
    /**
     * Lists all TaskStatus entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScrunoBoardBundle:TaskStatus')->findAll();

        return $this->render('ScrunoBoardBundle:TaskStatus:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new TaskStatus entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new TaskStatus();
        $form = $this->createForm(new TaskStatusType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_task_status_show', array('id' => $entity->getId())));
        }

        return $this->render('ScrunoBoardBundle:TaskStatus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new TaskStatus entity.
     *
     */
    public function newAction()
    {
        $entity = new TaskStatus();
        $form   = $this->createForm(new TaskStatusType(), $entity);

        return $this->render('ScrunoBoardBundle:TaskStatus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TaskStatus entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:TaskStatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TaskStatus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScrunoBoardBundle:TaskStatus:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TaskStatus entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:TaskStatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TaskStatus entity.');
        }

        $editForm = $this->createForm(new TaskStatusType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScrunoBoardBundle:TaskStatus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing TaskStatus entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:TaskStatus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TaskStatus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TaskStatusType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_task_status_edit', array('id' => $id)));
        }

        return $this->render('ScrunoBoardBundle:TaskStatus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TaskStatus entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScrunoBoardBundle:TaskStatus')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TaskStatus entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_task_status'));
    }

    /**
     * Creates a form to delete a TaskStatus entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
