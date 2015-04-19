<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InvoiceController extends Controller
{
    public function newAction()
    {
        return $this->render('TeamERPStoresBundle:Invoice:new_invoice.html.twig');
    }   
}
