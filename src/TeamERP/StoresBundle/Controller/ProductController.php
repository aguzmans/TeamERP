<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function newAction()
    {
        return $this->render('TeamERPStoresBundle:Product:new_product.html.twig');
    }
    public function searchAction()
    {
        return $this->render('TeamERPStoresBundle:Product:search_product.html.twig');
    }
    public function onHandAction()
    {
        return $this->render('TeamERPStoresBundle:Product:on_hand.html.twig');
    }    
}
