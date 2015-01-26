<?php

namespace TeamERP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TeamERPUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
