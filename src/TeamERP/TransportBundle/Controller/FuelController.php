<?php

namespace TeamERP\TransportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TeamERP\TransportBundle\Entity\FuelPurchase;
use TeamERP\TransportBundle\Form\Type\FuelPurchaseType;

class FuelController extends Controller
{
    public function indexAction(Request $request)
    {
        $fuelPurchase = new FuelPurchase();
        $form = $this->createForm(new FuelPurchaseType(), $fuelPurchase, array('ToDo' => 'search'));
        $form->handleRequest($request);
        $fuelPurchaseList = $this->getDoctrine()->getRepository('TeamERPTransportBundle:FuelPurchase')->findAll();
                if ($form->isValid() && $request->getMethod() == 'POST' ) 
                    {
                     $aFuelList = $this->getDoctrine()
                             ->getRepository('TeamERPTransportBundle:FuelPurchase')
                             ->findByCriteria($fuelPurchase->getInvoice());
                     return $this->render('TeamERPTransportBundle:Transport:fuel.html.twig', 
                             array('fuelPurchase' => $aFuelList, 'form' => $form->createView()));
                    }
        return $this->render('TeamERPTransportBundle:Transport:fuel.html.twig', 
                array('fuelPurchase' => $fuelPurchaseList, 'form' => $form->createView()));
    }
    public function RegisterFuelingAction (Request $request)
    {
        $fuelPurchase = new FuelPurchase();
        $form = $this->createForm(new FuelPurchaseType(), $fuelPurchase, array('ToDo' => 'save'));
        $form->handleRequest($request);
        if ($form->isValid() && $request->getMethod() == 'POST' ) {
            try {                
                $em = $this->getDoctrine()->getManager();
                $em->persist($fuelPurchase);
                $em->flush();
                $statusMessage = 'Saved';
            } catch (Exception $exc) {
                $statusMessage = $exc->getTraceAsString();
            }
            return $this->render('TeamERPTransportBundle:Transport:fuelregister.html.twig',
                    array('form' => $form->createView(), 'statusMessage' => $statusMessage));            
        }
        return $this->render('TeamERPTransportBundle:Transport:fuelregister.html.twig', 
                array('form' => $form->createView()));        
    }
    public function editAction (Request $request, $idFuelPurchase = null)
    {
        $fuelPurchase = new FuelPurchase();
        $em = $this->getDoctrine()->getManager();        
        $fuelPurchase = $em->getRepository('TeamERPTransportBundle:FuelPurchase')->find($idFuelPurchase);
        $form = $this->createForm(new FuelPurchaseType(), $fuelPurchase, array('ToDo' => 'edit'));
        $form->handleRequest($request);
        if ($form->isValid() && $request->getMethod() == 'POST') {
            try {
                $em->flush();                
                $statusMessage = 'Updated';
            } catch (Exception $exc) {
                $statusMessage = $exc->getTraceAsString();                
            }
            return $this->render('TeamERPTransportBundle:Transport:register.html.twig', 
                array('form' => $form->createView(), 'statusMessage' => $statusMessage));            
        }        
        return $this->render('TeamERPTransportBundle:Transport:fuelregister.html.twig',
                array('form' => $form->createView()));        
    }
}
