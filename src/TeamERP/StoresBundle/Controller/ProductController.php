<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \TeamERP\BaseBundle\Entity\Product;
class ProductController extends Controller
{
    public function newAction()
    {
        $product = new Product();
        // Form category service
        $form = $this->createForm('product', $product);
        //data handler helper service
        $object = $this->get('data_handler_class');
        //find table content (All Categories)
        $result = $object->findAll('TeamERPBaseBundle:Category');
        return $this->render('TeamERPStoresBundle:Product:new_product.html.twig', 
                array('form' => $form->createView(), 'categories' => $result));
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
