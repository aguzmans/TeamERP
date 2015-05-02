<?php

namespace TeamERP\StoresBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of JobType
 *
 * @author Abel Guzman
 */
class ProductType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label'=>'Product name', 'required' => true,
            'attr' => array('class' => 'form-control')))
            ->add('code', 'text', array('label'=>'Code', 'required' => false,
            'attr' => array('class' => 'form-control')))
            ->add('description', 'text', array('label'=>'Description', 'required' => false,
            'attr' => array('class' => 'form-control')))
            ->add('cost', 'money', array('label'=>'Cost', 'divisor' => 100, 'currency' => 'BWP'))
            ->add('category', new CategoryType())
            ->add('qtyToPurchase', 'number', array('label'=>'Quantity to purchase', 'required' => false,
            'attr' => array('class' => 'form-control')))
            ->add('reorderPoint', 'number', array('label'=>'Reorder point', 'required' => false,
            'attr' => array('class' => 'form-control')))
            ->add('qtyOnSalesOrder', 'number', array('label'=>'Quantity on sales order', 'required' => false,
            'attr' => array('class' => 'form-control')));
    }
    public function getName()
    {
        return 'product';
    }
}
