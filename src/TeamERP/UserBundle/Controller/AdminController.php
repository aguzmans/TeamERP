<?php

namespace TeamERP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AdminController
 *
 * @author Abel Guzman
 */
class AdminController extends Controller
{
    public function adminAction()
    {
        return $this->render('TeamERPUserBundle:Admin:admin.html.twig');
    }
}
