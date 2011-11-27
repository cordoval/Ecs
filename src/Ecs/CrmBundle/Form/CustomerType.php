<?php

namespace Ecs\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('middleName')
            ->add('lastName')
            ->add('gender', 'choice', array(
                'choices' => array('m' => 'Male', 'f' => 'Female'),
                'expanded' => false
            ))
            ->add('dob','birthday')
            ->add('emailAddress')
            ->add('phonePrimary')
            ->add('phoneSecondary')
            ->add('address1')
            ->add('address2')
            ->add('city')
            ->add('state')
            ->add('zip')
            ->add('country')
        ;
    }

    public function getName()
    {
        return 'ecs_crmbundle_customertype';
    }
}
