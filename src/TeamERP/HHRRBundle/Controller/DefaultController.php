<?php

namespace TeamERP\HHRRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TeamERPHHRRBundle:Default:index.html.twig', array('name' => $name));
    }
}
