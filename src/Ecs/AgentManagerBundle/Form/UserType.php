<?php

namespace Ecs\AgentManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('enabled')
            //->add('lastLogin')
            ->add('locked')
            //->add('expired')
            ->add('roles')
            ->add('first_name')
            ->add('last_name')
            ->add('phone')
            ->add('phone2')
            ->add('address1')
            ->add('address2')
            ->add('city')
            ->add('state')
            ->add('zip')
            //->add('startdate')
            ->add('employment_status')
            ->add('notes')
            ->add('employeejob')
        ;
    }

    public function getName()
    {
        return 'ecs_agentmanagerbundle_usertype';
    }
}
