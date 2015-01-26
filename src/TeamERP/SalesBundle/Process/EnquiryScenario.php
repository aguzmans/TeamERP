<?php

namespace TeamERP\SalesBundle\Process;

use Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilderInterface;
use Sylius\Bundle\FlowBundle\Process\Scenario\ProcessScenarioInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use TeamERP\SalesBundle\Process\EnquiryStepFirst;
use TeamERP\SalesBundle\Process\EnquiryStepSecond;

class EnquiryScenario extends ContainerAware implements ProcessScenarioInterface {

    public function build(ProcessBuilderInterface $builder) {
        $builder
                ->add('first', new EnquiryStepFirst())
                ->add('second', new EnquiryStepSecond())
        ;
    }

}
