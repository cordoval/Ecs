<?php

namespace Ecs\AgentManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecs\AgentManagerBundle\Entity\UserRole;
use Ecs\AgentManagerBundle\Form\UserRoleType;

/**
 * UserRole controller.
 *
 */
class UserRoleController extends Controller
{
    /**
     * Lists all UserRole entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('EcsAgentManagerBundle:UserRole')->findAll();

        return $this->render('EcsAgentManagerBundle:UserRole:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a UserRole entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:UserRole')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserRole entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsAgentManagerBundle:UserRole:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new UserRole entity.
     *
     */
    public function newAction()
    {
        $entity = new UserRole();
        $form   = $this->createForm(new UserRoleType(), $entity);

        return $this->render('EcsAgentManagerBundle:UserRole:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new UserRole entity.
     *
     */
    public function createAction()
    {
        $entity  = new UserRole();
        $request = $this->getRequest();
        $form    = $this->createForm(new UserRoleType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('roles_show', array('id' => $entity->getId())));
            
        }

        return $this->render('EcsAgentManagerBundle:UserRole:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing UserRole entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:UserRole')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserRole entity.');
        }

        $editForm = $this->createForm(new UserRoleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsAgentManagerBundle:UserRole:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing UserRole entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:UserRole')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserRole entity.');
        }

        $editForm   = $this->createForm(new UserRoleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('roles_edit', array('id' => $id)));
        }

        return $this->render('EcsAgentManagerBundle:UserRole:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a UserRole entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EcsAgentManagerBundle:UserRole')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UserRole entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('roles'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
