<?php

namespace Ecs\AgentManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EmployeeJobType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('job_title')
            ->add('job_description')
            ->add('starting_salary')
            ->add('positions_available')
            ->add('default_role','choice',
				  array(
					'choices' => array(
						'ROLE_SUPER_ADMIN' => 'Super Admin',
						'ROLE_ADMIN' => 'Admin',
						'ROLE_CSREP' => 'Customer Service',
						'ROLE_SALESREP' => 'Sales Rep'
						),
					'multiple' => true))
        ;
    }

    public function getName()
    {
        return 'ecs_agentmanagerbundle_employeejobstype';
    }
}
