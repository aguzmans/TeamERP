<?php

namespace TeamERP\CustomerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TeamERP\CustomerBundle\Form\DataTransformer\CompanyToTextTransformer;
/**
 * Description of JobType
 *
 * @author Abel Guzman
 */
class CustomerType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /* Build form */
        $builder
            ->add("customer_name", "text", array('label'=>'Customer name', 'required' => false,
            'attr' => array('class' => 'form-control')))
            ->add('typeContact','choice',array('label'=>'Type of contact',
                'multiple'=>false,
                'choices'=>array(0=>'Company', 1=>'Individual', 2=>'Employee'),
                'attr'=>array('style'=>'width:300px', 'customattr'=>'customdata')
                ))
            ->add('company', 'company_selector', array('required' => false))
            ->add("address", "text", array('label'=>'Physical address', 'required' => false))
            ->add("postal_address", "text", array('label'=>'Postal address', 'required' => false))
            ->add("city_town_village", "text", array('label'=>'City, town or village', 'required' => false))
            ->add("e_mail", "email", array('label'=>'E-mail', 'required' => false))
            ->add("land_line", "text", array('label'=>'Land line', 'required' => false))
            ->add("cell_phone", "text", array('label'=>'Cellular telephone', 'required' => false))
            ->add("fax", "text", array('label'=>'Fax', 'required' => false))
            ->add("save", "submit", array('label' => 'Save customer'))
            ->add("cancel", "reset", array('label' => 'Clear form',
            'attr' => array('class' => 'btn btn-default'))); 
    }
    public function getName()
    {
        return 'customer';
    }
}
