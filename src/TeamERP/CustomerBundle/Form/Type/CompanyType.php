<?php

namespace TeamERP\CustomerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of JobType
 *
 * @author Abel Guzman
 */
class CompanyType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('company_name', 'genemu_jqueryautocomplete_entity', array(
                    'class' => 'TeamERPCustomerBundle:Company',
                    'property' => 'company_name',
                ));
//                ->add('company_name', 'genemu_jqueryautocomplete_text', array(
//                    'route_name' => 'team_erp_customer_ajax_list_company'
//                ))        
//                ->add('company_name', 'genemu_jqueryautocomplete_text', 
//                array( 'required' => false,
//                    'suggestions' => array(
//                    'Ozil',
//                    'Van Persie',
//                    'Ozz',
//                    'Ozasuna'
//                    ),
//        ));
//        $builder->add("company_name", "text", 
//                array('label'=>'Company Name'));
    }
    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver) {
        //parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array(
            'class' => 'TeamERP\CustomerBundle\Entity\Company'
        ));
    }

    public function getName()
    {
        return 'company';
    }
}
