<?php

namespace TeamERP\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralController extends Controller
{
    public function indexAction()
    {
        return $this->render('TeamERPBaseBundle:General:general.html.twig');
    }
}
