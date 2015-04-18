<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function dashboardAction()
    {
        return $this->render('TeamERPStoresBundle:Product:dashboard.html.twig');
    }
    public function newAction()
    {
        return $this->render('TeamERPStoresBundle:Product:new_product.html.twig');
    }   
}
