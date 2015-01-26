<?php
namespace TeamERP\TransportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TeamERP\TransportBundle\Form\Type\JobType;
use TeamERP\TransportBundle\Entity\Job;
use Symfony\Component\HttpFoundation\Request;

class RegisterjobController extends Controller
{
    public function registerAction(Request $request)
    {
        $job = new Job();
        $form = $this->createForm(new JobType(), $job,array('action' => '', 'ToDo' => 'save'));
        $form->handleRequest($request);
        if ($form->isValid() && $request->getMethod() == 'POST' ) {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($job);
                $em->flush(); 
                $statusMessage = 'Saved';
            } catch (Exception $exc) {
                $statusMessage = $exc->getTraceAsString();
            }
            return $this->render('TeamERPTransportBundle:Transport:register.html.twig',
                    array('form' => $form->createView(), 'statusMessage' => $statusMessage));
        }
        return $this->render('TeamERPTransportBundle:Transport:register.html.twig', 
                array('form' => $form->createView()));
    }
    public function editAction (Request $request, $idJob = null)
    {
        $job = new Job();
        $em = $this->getDoctrine()->getManager();        
        $job = $em->getRepository('TeamERPTransportBundle:Job')->find($idJob);
        $form = $this->createForm(new JobType(), $job,array('action' => '', 'ToDo' => 'edit'));
        $form->handleRequest($request);
        if ($form->isValid() && $request->getMethod() == 'POST') {
            try {
                $em->flush();                
                $statusMessage = 'Updated';
            } catch (Exception $exc) {
                $statusMessage = $exc->getTraceAsString();                
            }
            return $this->render('TeamERPTransportBundle:Transport:register.html.twig', 
                array('form' => $form->createView(), 'statusMessage' => $statusMessage));            
        }
        return $this->render('TeamERPTransportBundle:Transport:register.html.twig', 
                array('form' => $form->createView()));
    }
}
