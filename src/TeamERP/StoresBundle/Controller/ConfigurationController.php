<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TeamERP\BaseBundle\Entity\MeasureUnit;
use Symfony\Component\HttpFoundation\Request;

class ConfigurationController extends Controller
{
    public function newMeasureUnitAction(Request $request)
    {
        $measureUnit = new MeasureUnit();
        // Form category service
        $form = $this->createForm('measure_unit', $measureUnit);
        //data handler helper service
        $object = $this->get('data_handler_class');
        $statusMessage = $object->persisObject($request, $measureUnit, $form);
        //find table content (All Measure Units)
        $result = $object->findAll('TeamERPBaseBundle:MeasureUnit');
        // Render templete.        
        return $this->render('TeamERPStoresBundle:Configuration:new_measure_unit.html.twig'
                , array('form' => $form->createView(), 
                    'status' => $statusMessage, 'result' => $result, 'action' => 'New'));
    } 
    public function editAction(Request $request, $id){
        $statusMessage = "";
        //data handler helper service
        $object = $this->get('data_handler_class');
        //find object to edit
        $measureUnit = $object->find('TeamERPBaseBundle:MeasureUnit',$id);
        // Form category service
        $form = $this->createForm('measure_unit', $measureUnit);
        //update category
        $statusMessage = $object->updateObject($request,$form);
        //Render template
        return $this->render('TeamERPStoresBundle:Configuration:new_measure_unit.html.twig', 
                array('form' => $form->createView(),  
                    'status' => $statusMessage, 'action' => 'Edit'));        
    }
    public function removeAction($id){
        $statusMessage = "";
        //data handler helper service
        $object = $this->get('data_handler_class');
        //find object to edit
        $measureUnit = $object->find('TeamERPBaseBundle:MeasureUnit',$id);
        $statusMessage = $object->removeAction($measureUnit);
        return $this->render('TeamERPStoresBundle:Configuration:remove_measure_unit.html.twig', 
                array('status' => $statusMessage));
    }
}
