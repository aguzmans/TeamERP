<?php

namespace TeamERP\SalesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of Enquiry Form Type
 *
 * @author Abel Guzman
 */
class ExtraFeatureType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /* Build form */
        $builder->add('ExtraFeature', 'text', array('label' => 'Add feature to units', 'required' => false));
    }
    public function getName()
    {
        return 'extra_feature';
    }
}
