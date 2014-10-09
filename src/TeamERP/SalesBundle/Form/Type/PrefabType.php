<?php
namespace TeamERP\SalesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of Mobile Form Type
 *
 * @author Abel Guzman
 */
class PrefabType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /* Build form */
        $builder
            ->add("Size", "number", array('label'=>'Mobile size', 'required' => true,
            'attr' => array('class' => 'form-control')))
            ->add('Quantity', 'integer', array('label'=>'Quantity for this size', 'required' => true))
            ->add("SpecialSpecs", "checkbox", array('label'=>'All with the same specifications?', 'required' => false))
            ->add('commons', new UnitCommonsType(), array('label' => ' '));
    }
    public function getName()
    {
        return 'prefab';
    }
}
