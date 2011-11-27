<?php

namespace Ecs\CrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecs\CrmBundle\Entity\Customer;
use Ecs\CrmBundle\Form\CustomerType;

use Ecs\CrmBundle\Entity\PaymentMethod;
use Ecs\CrmBundle\Form\PaymentMethodType;
/**
 * Customer controller.
 *
 */
class CustomerController extends Controller
{

    /**
     * Lists all Customer entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('EcsCrmBundle:Customer')->findAll();
        
        return $this->render('EcsCrmBundle:Customer:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Customer entity.
     *
     */
    public function showAction($id)
    {
        $em =  $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsCrmBundle:Customer')->find($id);
        $paymentMethods = $em->getRepository('EcsCrmBundle:PaymentMethod')->getForClient($id);
        
        if (!$entity) {throw $this->createNotFoundException('Unable to find Customer entity.');}

		$paymentMethodEntity = new PaymentMethod();
		$paymentMethodEntity->setCustomer($entity);
		$newPaymentMethodForm = $this->createForm(new PaymentMethodType(), $paymentMethodEntity);

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcsCrmBundle:Customer:show.html.twig', array(
            'entity'     => $entity,
            'paymentMethods'   => $paymentMethods,
			'newPaymentMethod_form' => $newPaymentMethodForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to create a new Customer entity.
     *
     */
    public function newAction()
    {
        $entity = new Customer();

        $form   = $this->createForm(new CustomerType(), $entity);

        return $this->render('EcsCrmBundle:Customer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Customer entity.
     *
     */
    public function createAction()
    {
        $entity  = new Customer();

        $form    = $this->createForm(new CustomerType(), $entity);
        $form->bindRequest($this->getRequest());

        if ($form->isValid()) {

			$entity->setRegisterDate(date('Y-m-d H:i:s'));

            $em = $this->getDoctrine()->getEntityManager();
			$em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('customer_show', array('id' => $entity->getId())));
            
        }

        return $this->render('EcsCrmBundle:Customer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Customer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository('EcsCrmBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $editForm = $this->createForm(new CustomerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
		
        return $this->render('EcsCrmBundle:Customer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView()
        ));
    }

    /**
     * Edits an existing Customer entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EcsCrmBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $editForm   = $this->createForm(new CustomerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('customer_edit', array('id' => $id)));
        }

        return $this->render('EcsCrmBundle:Customer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Customer entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EcsCrmBundle:Customer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Customer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('customer'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
