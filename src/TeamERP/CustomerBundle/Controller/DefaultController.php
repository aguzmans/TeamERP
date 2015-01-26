<?php

namespace TeamERP\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TeamERPCustomerBundle:Default:index.html.twig', array('name' => $name));
    }
}
