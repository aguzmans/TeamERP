<?php

namespace TeamERP\SalesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EnquiryController extends Controller
{
    public function indexAction()
    {
        return $this->render('TeamERPSalesBundle:Enquiry:index.html.twig'/*, array('name' => $name)*/);
    }
    public function editAction()
    {
        return $this->render('TeamERPSalesBundle:Default:index.html.twig'/*, array('name' => $name)*/);
    }
    public function newAction()
    {
        $form = $this->createForm('enquiry_general');
        $formMobile = $this->createForm('mobile');
        $formPrefab = $this->createForm('prefab');
        $formEnquiryTransport = $this->createForm('enquiry_transport');
        return $this->render('TeamERPSalesBundle:Enquiry:new.html.twig', array(
            'form' => $form->createView(), 
            'form_mobile' => $formMobile->createView(), 
            'form_prefab' => $formPrefab->createView(),
            'form_enquiry_transport' => $formEnquiryTransport->createView()));
    }    
}
