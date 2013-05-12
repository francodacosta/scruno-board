<?php

namespace Scruno\BoardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Scruno\BoardBundle\Entity\foo;
use Scruno\BoardBundle\Form\fooType;

/**
 * foo controller.
 *
 */
class fooController extends Controller
{
    /**
     * Lists all foo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScrunoBoardBundle:foo')->findAll();

        return $this->render('ScrunoBoardBundle:foo:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new foo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new foo();
        $form = $this->createForm(new fooType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('foo_show', array('id' => $entity->getId())));
        }

        return $this->render('ScrunoBoardBundle:foo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new foo entity.
     *
     */
    public function newAction()
    {
        $entity = new foo();
        $form   = $this->createForm(new fooType(), $entity);

        return $this->render('ScrunoBoardBundle:foo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a foo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:foo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find foo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScrunoBoardBundle:foo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing foo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:foo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find foo entity.');
        }

        $editForm = $this->createForm(new fooType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScrunoBoardBundle:foo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing foo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScrunoBoardBundle:foo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find foo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new fooType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('foo_edit', array('id' => $id)));
        }

        return $this->render('ScrunoBoardBundle:foo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a foo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScrunoBoardBundle:foo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find foo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('foo'));
    }

    /**
     * Creates a form to delete a foo entity by id.
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
