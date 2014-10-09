<?php
namespace TeamERP\SalesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of Mobile Form Type
 *
 * @author Abel Guzman
 */
class UnitCommonsType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /* Build form */
        $builder
            ->add('Purpose', 'textarea', array('label'=>'Purpose of the units', 'required' => false))
            ->add('DrowingNumber', 'text', array('label'=>'Drowing Number', 'required' => false))
            ->add('Example', 'radio', array('label'=>'Example', 'required' => false))
            ->add('Specific', 'radio', array('label'=>'Specific', 'required' => false)); 
    }
    public function getName()
    {
        return 'unit_commons';
    }
}
