<?php

namespace TeamERP\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralController extends Controller
{
    public function indexAction()
    {
        //$this->get('session')->setLocale('en');
        return $this->render('TeamERPBaseBundle:General:general.html.twig');
    }
}
