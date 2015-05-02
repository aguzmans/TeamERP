<?php

namespace TeamERP\StoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TeamERP\BaseBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
//use TeamERP\BaseBundle\Model\Lib\DataHandler;
class CategoryController extends Controller
{
    public function newAction(Request $request)
    {
        $category = new Category();
        // Form category service
        $form = $this->createForm('category', $category);
        //data handler helper service
        $object = $this->get('data_handler_class');
        $statusMessage = $object->persisObject($request, $category, $form);
        // Render templete.
        return $this->render('TeamERPStoresBundle:Category:new_category.html.twig'
                , array('form' => $form->createView(), 
                    'status' => $statusMessage));
    }   
}
