<?php
namespace TeamERP\SalesBundle\Process\Step;

use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;
use Sylius\Bundle\FlowBundle\Process\Step\ControllerStep;

class EnquiryStepThird extends ControllerStep {

    public function displayAction(ProcessContextInterface $context) {
        return $this->render('TeamERPSalesBundle:Enquiry:step2.html.twig');
    }
    public function forwardAction(ProcessContextInterface $context) {
        return $this->complete();
    }
}
