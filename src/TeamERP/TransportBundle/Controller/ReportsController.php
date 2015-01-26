<?php

namespace TeamERP\TransportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TeamERP\TransportBundle\Form\Type\DateStartEndType;
use TeamERP\TransportBundle\Entity\Vehicle;


class ReportsController extends Controller
{
    public function renderAction(Request $request)
    {
        $form = $this->createForm(new DateStartEndType());
        $form->handleRequest($request); 
        if ($form->isValid() && $request->getMethod() == 'POST'){
            $aux = $form->getData();
            $vehicleReport = $this->getDoctrine()->getRepository('TeamERPTransportBundle:Vehicle')
                ->findByIntegrated($aux['StartDatetime'],$aux['EndDatetime']);
        }
        else{
            $vehicleReport = $this->getDoctrine()->getRepository('TeamERPTransportBundle:Vehicle')
                ->findByIntegrated();
        //var_dump($vehicleReport);
        }
        $graph = new \SVGGraph(380, 380); 
        //$graph->colours = array('','green','blue');
        $data = array();
        $total ['totalFuel'] =0;
        $total ['totalFuel'] =0;
        $total['totalDistance']=0;
        $total['totalFuelCost']=0;
        $total['countJob']=0;
        //prepare data to render 
        for($i=0;$i<=count($vehicleReport);$i++){
            if (isset($vehicleReport[$i]['totalFuel'])){
                //data for the graph
                $data[]=$vehicleReport[$i]['totalFuel'];
                //total Fuel calculation
                $total ['totalFuel'] += $vehicleReport[$i]['totalFuel'];
            }
            else {
                $data[]=0;
            }
            //Total Distance calculation
            if (isset($vehicleReport[$i]['totalDistance']))
                $total['totalDistance'] += $vehicleReport[$i]['totalDistance'];
            //Total Fuel Cost calculation
            if (isset($vehicleReport[$i]['totalFuelCost']))
                $total['totalFuelCost'] += $vehicleReport[$i]['totalFuelCost'];
            //Count total Jobs
            if (isset($vehicleReport[$i]['countJob']))
                $total['countJob'] += $vehicleReport[$i]['countJob'];            
            
        }
        $graph->Values($data);
         return $this->render('TeamERPTransportBundle:Transport:report.html.twig', array('vehicles' => $vehicleReport, 
            'render' => $graph, 'total' => $total, 'form' => $form->createView()));
    }
    private function VehicleJobs (ArrayCollection $VehicleJobs){
        $countJobsXVehicle = 0;
        foreach ($VehicleJobs as $VehicleJob)
        {
            $countJobsXVehicle++;
        }  
        return $countJobsXVehicle;
    }
}
