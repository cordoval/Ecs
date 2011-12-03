<?php

namespace Ecs\AgentManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserRoleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('internal_name')
            ->add('display_name')
            ->add('description')
        ;
    }

    public function getName()
    {
        return 'ecs_agentmanagerbundle_userroletype';
    }
}
