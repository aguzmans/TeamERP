<?php

namespace TeamERP\SalesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TeamERPSalesBundle:Default:index.html.twig', array('name' => $name));
    }
}
