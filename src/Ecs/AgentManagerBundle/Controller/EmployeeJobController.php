<?php

namespace Ecs\AgentManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ecs\AgentManagerBundle\Entity\EmployeeJob;
use Ecs\AgentManagerBundle\Form\EmployeeJobType;

/**
 * EmployeeJob controller.
 *
 */
class EmployeeJobController extends Controller
{
    /**
     * Lists all EmployeeJob entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('EcsAgentManagerBundle:EmployeeJob')->findAll();

        return $this->render('EcsAgentManagerBundle:EmployeeJob:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a EmployeeJob entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:EmployeeJob')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmployeeJob entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsAgentManagerBundle:EmployeeJob:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new EmployeeJob entity.
     *
     */
    public function newAction()
    {
        $entity = new EmployeeJob();
        $form   = $this->createForm(new EmployeeJobType(), $entity);

        return $this->render('EcsAgentManagerBundle:EmployeeJob:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new EmployeeJob entity.
     *
     */
    public function createAction()
    {
		$entity  = new EmployeeJob();
        $request = $this->getRequest();
        $form    = $this->createForm(new EmployeeJobType(), $entity);
		//$request->request->set('default_role', serialize($request->request->get('default_role')));
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agentmanager_jobs_show', array('id' => $entity->getId())));
            
        }
		$em = $this->getDoctrine()->getEntityManager();
		$em->persist($entity);
		$em->flush();


        return $this->render('EcsAgentManagerBundle:EmployeeJob:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing EmployeeJob entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:EmployeeJob')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmployeeJob entity.');
        }

        $editForm = $this->createForm(new EmployeeJobType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsAgentManagerBundle:EmployeeJob:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing EmployeeJob entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsAgentManagerBundle:EmployeeJob')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmployeeJob entity.');
        }

        $editForm   = $this->createForm(new EmployeeJobType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agentmanager_jobs_edit', array('id' => $id)));
        }

        return $this->render('EcsAgentManagerBundle:EmployeeJob:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EmployeeJob entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EcsAgentManagerBundle:EmployeeJob')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EmployeeJob entity.');
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
