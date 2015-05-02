<?php
namespace TeamERP\BaseBundle\Model\Lib;
/**
 * Description of DataHandler
 *
 * @author Abel Guzman
 */

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;

class DataHandler {
    private $em;

    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em; 
    } 
    public function persisObject(Request $request, $Object, $form) {
        $form->handleRequest($request);
        $statusMessage = "";
//        var_dump($Object);
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
    
}
