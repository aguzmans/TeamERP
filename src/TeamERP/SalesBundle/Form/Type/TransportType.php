<?php
namespace TeamERP\SalesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of Mobile Form Type
 *
 * @author Abel Guzman
 */
class TransportType  extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /* Build form */
        $builder
            ->add('DeliveryLocation', 'text', array('label'=>'Delivery location', 'required' => false))
            ->add('DistanceToLocation', 'text', array('label'=>'Distance to delivery location', 'required' => false)); 
    }
    public function getName()
    {
        return 'enquiry_transport';
    }
}
