<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function newAction()
    {
        return $this->render('TeamERPStoresBundle:Category:new_category.html.twig');
    }   
}
