<?php

namespace Ecs\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('description')
            ->add('reoccurring', 'choice', array(
				'choices' => array('1' => "Yes", '0' => "No" ),
				))
            ->add('billFrequency', 'integer', array('required' => false))
            ->add('billTimes', 'integer', array('required' => false))
            ->add('trial', 'choice', array(
				'choices' => array('1' => "Yes", '0' => "No" ),
				))
            ->add('trialLength', 'integer', array('required' => false))
			->add('billdelay', 'integer', array('required' => false))
        ;
    }

    public function getName()
    {
        return 'ecs_crmbundle_producttype';
    }
}
