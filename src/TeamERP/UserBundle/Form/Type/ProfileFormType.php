<?php

namespace TeamERP\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('name')
                ->add('OrganizationName');
    }

    public function getParent()
    {
        return 'fos_user_profile';
    }

    public function getName()
    {
        return 'teamerp_user_profile_edit';
    }
    public function getOrganizationName()
    {
        return 'teamerp_user_profile_edit';
    } 
}
