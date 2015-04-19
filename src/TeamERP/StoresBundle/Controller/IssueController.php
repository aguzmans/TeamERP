<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IssueController extends Controller
{
    public function newAction()
    {
        return $this->render('TeamERPStoresBundle:Issue:new_issue.html.twig');
    }   
}
