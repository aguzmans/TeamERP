<?php

namespace TeamERP\StoresBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of JobType
 *
 * @author Abel Guzman
 */
class MeasureUnitType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label'=>'Measure unit name', 'required' => true,
            'attr' => array('class' => 'form-control')))
            ->add('abreviation', 'text', array('label'=>'Abreviation', 'required' => false,
            'attr' => array('class' => 'form-control')));
    }
    public function getName()
    {
        return 'measure_unit';
    }
    public function setDefaultOptions(OptionsResolverInterface $r)
    {
            $r->setDefaults(array(
                    'data_class' => 'TeamERP\BaseBundle\Entity\MeasureUnit'
            ));
    }
}
