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
        //find table content (All Categories)
        $result = $object->findAll('TeamERPBaseBundle:Category');
        // Render templete.        
        return $this->render('TeamERPStoresBundle:Category:new_category.html.twig'
                , array('form' => $form->createView(), 
                    'status' => $statusMessage, 'result' => $result, 'action' => 'New'));
    }
    public function editAction(Request $request, $id){
        $statusMessage = "";
        //data handler helper service
        $object = $this->get('data_handler_class');
        //find object to edit
        $category = $object->find('TeamERPBaseBundle:Category',$id);
        // Form category service
        $form = $this->createForm('category', $category);
        //update category
        $statusMessage = $object->updateObject($request,$form);
        //Render template
        return $this->render('TeamERPStoresBundle:Category:new_category.html.twig', 
                array('form' => $form->createView(),  
                    'status' => $statusMessage, 'action' => 'Edit'));        
    }
    public function removeAction($id){
        $statusMessage = "";
        //data handler helper service
        $object = $this->get('data_handler_class');
        //find object to edit
        $category = $object->find('TeamERPBaseBundle:Category',$id);
        $statusMessage = $object->removeAction($category);
        return $this->render('TeamERPStoresBundle:Category:remove_category.html.twig', 
                array('status' => $statusMessage));
    }
}
