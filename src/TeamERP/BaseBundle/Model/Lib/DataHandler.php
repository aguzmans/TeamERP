<?php
namespace TeamERP\BaseBundle\Model\Lib;
/**
 * Description of DataHandler
 *  Generic class to handle DB interactions
 * persist, update, delete,search
 * @author Abel Guzman
 */
use Symfony\Component\HttpFoundation\Request;

class DataHandler {
    private $em;
    public function __construct(\Doctrine\ORM\EntityManager $em){
        $this->em = $em; 
    } 
    public function persisObject(Request $request, $Object, $form) {
        $form->handleRequest($request);
        $statusMessage = "";
        if ($form->isValid() && $request->getMethod() == 'POST') {
            try {
                $this->em->persist($Object);
                $this->em->flush();
                $statusMessage = "Saved";
            } catch (Exception $exc) {
                $statusMessage = $exc->getTraceAsString();
            }
        }
        return $statusMessage;
    }
    public function updateObject(Request $request, $form){
        $statusMessage = "";        
        if ($request->getMethod() == 'POST') {
            try {                
                $form->handleRequest($request);
                $this->em->flush();                
                $statusMessage = "Edited";
            } catch (Exception $exception) {
                $statusMessage = $exception->getTraceAsString();
            }
        }
        return $statusMessage;
    }
    public function removeAction($object){
        try {
            $this->em->remove($object);
            $this->em->flush();
            $statusMessage = "Deleted";
        } catch (Exception $exception) {
            $statusMessage = $exception->getTraceAsString();
        }
        return $statusMessage;
    }
    public function findAll($object){
        $result = $this->em->getRepository($object)->findAll();
        return $result;
    }
    public function find($object,$id){
        $result = $this->em->getRepository($object)->find($id);
        return $result;
    }    
}
