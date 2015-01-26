<?php

namespace TeamERP\SalesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of Enquiry Form Type
 *
 * @author Abel Guzman
 */
class EnquiryGeneralType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /* Build form */
        $builder
            ->add("EnquiryNumber", "text", array('label'=>'Enquiry Number', 'required' => true,
            'attr' => array('class' => 'form-control')))
            ->add('Date', 'date', array('required' => false ))
            ->add('Phone', 'checkbox', array('label'=>'phone', 'required' => false))
            ->add('email', 'checkbox', array('label'=>'e-mail', 'required' => false))
            ->add('WalkIn', 'checkbox', array('label'=>'Walk in', 'required' => false))
            ->add('GeneralRemarks', 'textarea', array('label'=>'General remarks', 'required' => false))
            ->add('Mobile', 'checkbox', array('label'=>'mobile', 'required' => false))
            ->add('Prefab', 'checkbox', array('label'=>'Prefab', 'required' => false))
            ->add('Transport', 'checkbox', array('label' => 'Transport', 'required' => false))
            ->add('GeneralExtraFeature', 'collection',  array('type' => 'extra_feature', 
                'required' => false, 'allow_add' => true));
    }
    public function getName()
    {
        return 'enquiry_general';
    }
}
