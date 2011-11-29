<?php

namespace Ecs\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class StepOneType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('gender', 'choice', array(
                'choices' => array('m' => 'Male', 'f' => 'Female'),
                'expanded' => false
            ))
            ->add('emailAddress')
            ->add('phonePrimary')
            ->add('phoneSecondary')
        ;
    }

    public function getName()
    {
        return 'ecs_crmbundle_steponetype';
    }
}
