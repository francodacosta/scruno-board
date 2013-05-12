<?php

namespace Scruno\BoardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Scruno\BoardBundle\Entity\TaskType;
use Scruno\BoardBundle\Form\TaskTypeType;

/**
 * TaskType controller.
 *
 */
class TaskTypeController extends Controller
{
    /**
     * Lists all TaskType entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScrunoBoardBundle:TaskType')->findAll();

        return $this->render('ScrunoBoardBundle:TaskType:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new TaskType entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new TaskType();
        $form = $this->createForm(new TaskTypeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('task_type_show', array('id' => $entity->getId())));
        }

        return $this->render('ScrunoBoardBundle:TaskType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new TaskType entity.
     *
     */
    public function newAction()
    {
        $entity = new TaskType();
        $form   = $this->createForm(new TaskTypeType(), $entity);

        return $this->render('ScrunoBoardBundle:TaskType:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TaskType entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:TaskType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TaskType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScrunoBoardBundle:TaskType:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TaskType entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:TaskType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TaskType entity.');
        }

        $editForm = $this->createForm(new TaskTypeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScrunoBoardBundle:TaskType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing TaskType entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:TaskType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TaskType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TaskTypeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('task_type_edit', array('id' => $id)));
        }

        return $this->render('ScrunoBoardBundle:TaskType:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TaskType entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScrunoBoardBundle:TaskType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TaskType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('task_type'));
    }

    /**
     * Creates a form to delete a TaskType entity by id.
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
