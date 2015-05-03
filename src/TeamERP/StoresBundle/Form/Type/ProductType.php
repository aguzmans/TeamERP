<?php

namespace TeamERP\StoresBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView; 
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\View\ChoiceView;
//use TeamERP\BaseBundle\Entity\MeasureUnit;
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
            ->add('category', new CategoryType(), array('required' => false))
            ->add('measureunit', 'entity', array('label' => 'Measure Unit',
                'class' => 'TeamERPBaseBundle:MeasureUnit',
                'expanded' => false, 'placeholder' => '',
                'multiple' => false, 'property' => 'abreviation'
            ))
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
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $new_choice = new ChoiceView(array(), 'add', 'add new'); // <- new option
        $view->children['measureunit']->vars['choices'][] = $new_choice;//<- adding the new option 
    }
}
