<?php

namespace TeamERP\TransportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TeamERP\TransportBundle\Form\Type\JobType;
use TeamERP\TransportBundle\Entity\Job;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $job = new Job();
        $form = $this->createForm(new JobType(), $job,array('action' => '', 'ToDo' => 'search'));
        $form->handleRequest($request);
        $Jobs = $this->getDoctrine()->getRepository('TeamERPTransportBundle:Job')->findAll();
                if ($form->isValid() && $request->getMethod() == 'POST' ) 
                    {
                     $aJobList = $this->getDoctrine()
                             ->getRepository('TeamERPTransportBundle:Job')
                             ->findByCriteria($job->getDeliveryNo(), $job->getDestination());
                     return $this->render('TeamERPTransportBundle:Transport:index.html.twig',
                             array('Jobs' => $aJobList, 'form' => $form->createView()));
                    }
        return $this->render('TeamERPTransportBundle:Transport:index.html.twig', array('Jobs' => $Jobs, 'form' => $form->createView()));
    }
}
