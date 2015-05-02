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
