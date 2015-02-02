<?php

namespace TeamERP\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('name')
                ->add('OrganizationName')
                ->add('roles', 'choice', array(
                    'choices'   => array(
                        'ROLE_SALES'   => 'Sales',
                        'ROLE_ACOUNTS'   => 'Accounts',
                        'ROLE_USER'   => 'General user',
                        'ROLE_COMPANY_ADMIN' => 'Administrator',
                    ),
                    'multiple'  => true,
                    ));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'teamerp_user_registration';
    }
    public function getOrganizationName()
    {
        return 'teamerp_user_registration';
    }    
}