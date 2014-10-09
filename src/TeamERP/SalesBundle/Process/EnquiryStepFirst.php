<?php
namespace TeamERP\SalesBundle\Process;

use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;
use Sylius\Bundle\FlowBundle\Process\Step\ControllerStep;

class EnquiryStepFirst extends ControllerStep {
    public function displayAction(ProcessContextInterface $context) {
        return $this->render('TeamERPSalesBundle:Enquiry:step1.html.twig');
    }

    public function forwardAction(ProcessContextInterface $context) {
        return $this->complete();
    }
}