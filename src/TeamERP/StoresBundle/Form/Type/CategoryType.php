<?php

namespace TeamERP\StoresBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of JobType
 *
 * @author Abel Guzman
 */
class CategoryType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label'=>'Category name', 'required' => true,
            'attr' => array('class' => 'form-control')))
            ->add('code', 'text', array('label'=>'Code', 'required' => false,
            'attr' => array('class' => 'form-control')))
            ->add('description', 'text', array('label'=>'Description', 'required' => false,
            'attr' => array('class' => 'form-control')));
    }
    public function getName()
    {
        return 'category';
    }
}
