<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function dashboardAction()
    {
        return $this->render('TeamERPStoresBundle:Dashboard:dashboard.html.twig');
    }  
}
