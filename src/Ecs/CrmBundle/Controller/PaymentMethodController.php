<?php

namespace Ecs\CrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecs\CrmBundle\Entity\PaymentMethod;
use Ecs\CrmBundle\Form\PaymentMethodType;

/**
 * PaymentMethod controller.
 *
 */
class PaymentMethodController extends Controller
{
    /**
     * Lists all PaymentMethod entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('EcsCrmBundle:PaymentMethod')->findAll();

        return $this->render('EcsCrmBundle:PaymentMethod:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a PaymentMethod entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsCrmBundle:PaymentMethod')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaymentMethod entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsCrmBundle:PaymentMethod:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new PaymentMethod entity.
     *
     */
    public function newAction()
    {
        $entity = new PaymentMethod();
        $form   = $this->createForm(new PaymentMethodType(), $entity);

        return $this->render('EcsCrmBundle:PaymentMethod:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new PaymentMethod entity.
     *
     */
    public function createAction()
    {
        $entity  = new PaymentMethod();
        $request = $this->getRequest();
        $form    = $this->createForm(new PaymentMethodType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
			echo"<pre>",print_r($entity),"</pre>";
			if($request->isXmlHttpRequest())
			{
				
			}
            //return $this->redirect($this->generateUrl('paymentmethod_show', array('id' => $entity->getId())));
            
        }

        return $this->render('EcsCrmBundle:PaymentMethod:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing PaymentMethod entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsCrmBundle:PaymentMethod')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaymentMethod entity.');
        }

        $editForm = $this->createForm(new PaymentMethodType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsCrmBundle:PaymentMethod:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing PaymentMethod entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsCrmBundle:PaymentMethod')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaymentMethod entity.');
        }

        $editForm   = $this->createForm(new PaymentMethodType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('paymentmethod_edit', array('id' => $id)));
        }

        return $this->render('EcsCrmBundle:PaymentMethod:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PaymentMethod entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EcsCrmBundle:PaymentMethod')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PaymentMethod entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('paymentmethod'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
