<?php

namespace Scruno\BoardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Scruno\BoardBundle\Entity\BoardColumn;
use Scruno\BoardBundle\Form\BoardColumnType;

/**
 * BoardColumn controller.
 *
 */
class BoardColumnController extends Controller
{
    /**
     * Lists all BoardColumn entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScrunoBoardBundle:BoardColumn')->findAll();

        return $this->render('ScrunoBoardBundle:BoardColumn:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new BoardColumn entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new BoardColumn();
        $form = $this->createForm(new BoardColumnType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_board_column_show', array('id' => $entity->getId())));
        }

        return $this->render('ScrunoBoardBundle:BoardColumn:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new BoardColumn entity.
     *
     */
    public function newAction()
    {
        $entity = new BoardColumn();
        $form   = $this->createForm(new BoardColumnType(), $entity);

        return $this->render('ScrunoBoardBundle:BoardColumn:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BoardColumn entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:BoardColumn')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BoardColumn entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScrunoBoardBundle:BoardColumn:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing BoardColumn entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:BoardColumn')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BoardColumn entity.');
        }

        $editForm = $this->createForm(new BoardColumnType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScrunoBoardBundle:BoardColumn:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing BoardColumn entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:BoardColumn')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BoardColumn entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BoardColumnType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_board_column_edit', array('id' => $id)));
        }

        return $this->render('ScrunoBoardBundle:BoardColumn:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a BoardColumn entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScrunoBoardBundle:BoardColumn')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BoardColumn entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_board_column'));
    }

    /**
     * Creates a form to delete a BoardColumn entity by id.
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
