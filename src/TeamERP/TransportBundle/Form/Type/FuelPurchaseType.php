<?php

namespace TeamERP\TransportBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of JobType
 *
 * @author Abel Guzman
 */
class FuelPurchaseType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $options['ToDo']=='search'? $required = false : $required =true;
        $builder->add("invoice", "text", array('label'=>'Invoice Number', 'required' => $required));
                /* Put it as a drop down list */
            if($options['ToDo'] != "search") 
                {
                    $builder->add("Vehicles", "entity", array('class' => 'TeamERPTransportBundle:Vehicle'
                            , 'property' => 'plateNumber', 'required' => false))
                            ->add("dateTime", "datetime", array('data' => new \DateTime('now'), 'required' => false))
                    ->add("kmOdo", "number", array('label'=>'Odometer value', 'required' => false))
                    ->add("remarks", "text", array('required' => false))
                    ->add('fuelUsed', 'number', array('required' => false))
                    ->add('fuelPrice', 'number', array('required' => false))
                    ->add('refueler', 'text', array('required' => false));
                }
                else $builder->add("search", "submit");
                if ($options['ToDo'] == 'save') $builder->add("save", "submit"); 
                if ($options['ToDo'] == 'edit') $builder->add("edit", "submit"); 
    }
    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver) {
        parent::setDefaultOptions($resolver);
        $resolver->setDefaults(array('ToDo' => ''));
    }

    public function getName()
    {
        return 'job';
    }
}
