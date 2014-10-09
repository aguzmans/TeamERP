<?php

namespace TeamERP\TransportBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of JobType
 *
 * @author Abel Guzman
 */
class DateStartEndType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("StartDatetime", "datetime", array('data' => new \DateTime('-1 month'), 'label' => 'From'));
        $builder->add("EndDatetime", "datetime", array('data' => new \DateTime('now'), 'label' => 'To'));        
        $builder->add("search", "submit", array('label' => 'Create Report')); 
    }
    public function getName()
    {
        return 'DateStartEnd';
    }
}
