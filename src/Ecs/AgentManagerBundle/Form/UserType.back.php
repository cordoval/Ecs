<?php

namespace Ecs\AgentManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('first_name')
            ->add('last_name')
            ->add('phone')
            ->add('phone2')
            ->add('address1')
            ->add('address2')
            ->add('city')
            ->add('state')
            ->add('zip')
            ->add('startdate')
            ->add('employment_status')
            ->add('notes')
        ;
    }

    public function getName()
    {
        return 'ecs_agent_registration';
    }
}
