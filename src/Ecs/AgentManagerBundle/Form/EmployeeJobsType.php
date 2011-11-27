<?php

namespace Ecs\AgentManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EmployeeJobsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('job_title')
            ->add('job_description')
            ->add('starting_salary')
            ->add('positions_available')
            ->add('default_role')
        ;
    }

    public function getName()
    {
        return 'ecs_agentmanagerbundle_employeejobstype';
    }
}
