<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InvoiceController extends Controller
{
    public function newAction()
    {
        return $this->render('TeamERPStoresBundle:Invoice:new_invoice.html.twig');
    } 
    public function listAction()
    {
        return $this->render('TeamERPStoresBundle:Invoice:list_invoices.html.twig');
    }     
}
