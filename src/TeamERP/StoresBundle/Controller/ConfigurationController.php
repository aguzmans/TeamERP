<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfigurationController extends Controller
{
    public function newMeasureUnitAction()
    {
        return $this->render('TeamERPStoresBundle:Configuration:new_measure_unit.html.twig');
    }   
}
