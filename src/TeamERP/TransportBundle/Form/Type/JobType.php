<?php

namespace TeamERP\TransportBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of JobType
 *
 * @author Abel Guzman
 */
class JobType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $options['ToDo']=='search'? $required = false : $required =true;
        $builder->setAction('')
            ->add("deliveryNo", "text", array('label'=>'Delivery Number', 'required' => $required))            
            ->add("destination", "text", array('required' => $required));
            if($options['ToDo'] != "search") 
                {
                    $builder->add("dateTime", "datetime", array('data' => new \DateTime('now')))
                    ->add("jobType", "entity", array('class' => 'TeamERPTransportBundle:JobType'
                            , 'property' => 'Description')) /*analyse what kind of data is it.*/
                    ->add("Vehicles", "entity", array('class' => 'TeamERPTransportBundle:Vehicle'
                            , 'property' => 'plateNumber')) /* Put it as a drop down list */
                    ->add("kmOdoStart", "number", array('required' => false))
                    ->add("kmOdoEnd", "number", array('required' => false))
                    //->add("fuelUsedLitre", "number", array('required' => false))
                    //->add("fuelPrice", "money", array('currency' => 'BWP', 'required' => false))
                    ->add("driverName","text", array('required' => false))
                    ->add("crewNames", "text", array('required' => false))
                    ->add("trilerPlateNumber", "text", array('required' => false)) /* Need to chenge it to a drop down list */
                    ->add("remarks", "text", array('required' => false))
                    //->add("returnLoadPlan", "text", array('required' => false))
                    ->add("jobStatus", "entity",  array('class' => 'TeamERPTransportBundle:JobStatus'
                            , 'property' => 'Description')); /* Put it a diferent table? */
                }
                else $builder->add("search", "submit"); 
                if ($options['ToDo'] == 'save') $builder->add("save", "submit"); 
                if ($options['ToDo'] == 'edit') $builder->add("edit", "submit", array('label' => 'Save changes')); 
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
