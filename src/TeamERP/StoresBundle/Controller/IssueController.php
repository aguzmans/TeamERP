<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IssueController extends Controller
{
    public function newAction()
    {
        return $this->render('TeamERPStoresBundle:Issue:new_issue.html.twig');
    }   
    public function listAction()
    {
        return $this->render('TeamERPStoresBundle:Issue:list_issues.html.twig');
    }
}
