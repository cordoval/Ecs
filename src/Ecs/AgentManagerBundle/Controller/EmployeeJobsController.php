<?php

namespace Ecs\AgentManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecs\AgentManagerBundle\Entity\EmployeeJobs;
use Ecs\AgentManagerBundle\Form\EmployeeJobsType;

/**
 * EmployeeJobs controller.
 *
 */
class EmployeeJobsController extends Controller
{
    /**
     * Lists all EmployeeJobs entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('EcsAgentManagerBundle:EmployeeJobs')->findAll();

        return $this->render('EcsAgentManagerBundle:EmployeeJobs:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a EmployeeJobs entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:EmployeeJobs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmployeeJobs entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsAgentManagerBundle:EmployeeJobs:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new EmployeeJobs entity.
     *
     */
    public function newAction()
    {
        $entity = new EmployeeJobs();
        $form   = $this->createForm(new EmployeeJobsType(), $entity);

        return $this->render('EcsAgentManagerBundle:EmployeeJobs:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new EmployeeJobs entity.
     *
     */
    public function createAction()
    {
        $entity  = new EmployeeJobs();
        $request = $this->getRequest();
        $form    = $this->createForm(new EmployeeJobsType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agentmanager_jobs_show', array('id' => $entity->getId())));
            
        }

        return $this->render('EcsAgentManagerBundle:EmployeeJobs:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing EmployeeJobs entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:EmployeeJobs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmployeeJobs entity.');
        }

        $editForm = $this->createForm(new EmployeeJobsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsAgentManagerBundle:EmployeeJobs:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing EmployeeJobs entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:EmployeeJobs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmployeeJobs entity.');
        }

        $editForm   = $this->createForm(new EmployeeJobsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agentmanager_jobs_edit', array('id' => $id)));
        }

        return $this->render('EcsAgentManagerBundle:EmployeeJobs:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EmployeeJobs entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EcsAgentManagerBundle:EmployeeJobs')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EmployeeJobs entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('agentmanager_jobs'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
