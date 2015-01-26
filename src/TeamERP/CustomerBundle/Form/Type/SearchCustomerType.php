<?php

namespace TeamERP\CustomerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of JobType
 *
 * @author Abel Guzman
 */
class SearchCustomerType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /* Build form */
        $builder
            ->add("customer_info", "text")
            ->add("search", "submit", array('label' => 'Search Customer',
            'attr' => array('class' => 'btn btn-default'))); 
    }
//    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver) {
////        $resolver->setDefaults(array('data_class' => 'TeamERP\CustomerBundle\Entity\Customer',))
////                ->setRequired(array('em',))
////                ->setAllowedTypes(array('em' => 'Doctrine\Common\Persistence\ObjectManager',));        
//    }

    public function getName()
    {
        return 'customer';
    }
}
