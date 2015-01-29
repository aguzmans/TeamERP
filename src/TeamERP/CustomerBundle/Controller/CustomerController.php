<?php

namespace TeamERP\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TeamERP\CustomerBundle\Entity\Customer;
use TeamERP\CustomerBundle\Form\Type\SearchCustomerType;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;

class CustomerController extends Controller {
    /*
     * Save a New Customer
     */
    public function newAction(Request $request) {
        /* Create the list of companies for autocomplete */
        $data = $this->createJSONListOfCompanies();
        $customer = new Customer();
        //create form using the service called customer
        $form = $this->createForm('customer', $customer);
        /* Persis Customer */
        $statusMessage = $this->persisCustomerAndCompany($request, $customer, $form);
        /* Send infor to the client */
        return $this->render('TeamERPCustomerBundle:Customer:new.html.twig', 
                array('form' => $form->createView(), 
                    'data' => $data, 
                    'status' => $statusMessage));
    }
    /*
     * Search page of the customer
     */
    public function indexAction(Request $request, $page = 1) {
        //Create search form
        $form = $this->createForm(new SearchCustomerType());
        //initialize search result and customer
        $result = '';
        $customerInfo = '';
        $pagerfanta = '';

        //if the form is sent by post search in the DB
        if ($request->getMethod() == 'POST' || $page > 0) {
            //get the customer information from the form
            $customerInfo = $request->request->get('customer');
            $customerInfo = $customerInfo['customer_info'];
            //Query DB
            $result = $this->getDoctrine()->getManager()
                    ->getRepository('TeamERPCustomerBundle:Customer')
                    ->searchCustomer($customerInfo);
            $pagerfanta = new Pagerfanta(new ArrayAdapter($result));
            $pagerfanta->setMaxPerPage(5);
            try {
                $pagerfanta->setCurrentPage($page);
            } catch (NotValidCurrentPageException $e) {
                throw new NotFoundHttpException();
            }
        }
        $render = $this->render('TeamERPCustomerBundle:Customer:index.html.twig', array('form' => $form->createView(),
            'result' => $result,
            'searchTerm' => $customerInfo,
            'pfresult' => $pagerfanta
        ));
        return $render;
    }

    public function editAction($id, Request $request) {
        $data = $this->createJSONListOfCompanies();
        $statusMessage = "";
        $em = $this->getDoctrine()->getManager();
        $customer = $em->getRepository('TeamERPCustomerBundle:Customer')
                ->find($id);
        $form = $this->createForm('customer', $customer);
        if ($request->getMethod() == 'POST') {
            try {
                $form->handleRequest($request);
                $em->flush();
                $statusMessage = "Edited";
            } catch (Exception $exception) {
                $statusMessage = $exception->getTraceAsString();
            }
        }
        return $this->render('TeamERPCustomerBundle:Customer:edit.html.twig', array('form' => $form->createView(), 'data' => $data, 'status' => $statusMessage));
    }

    public function deleteAction($id) {
        $statusMessage = "";
        $em = $this->getDoctrine()->getManager();
        $customer = $em->getRepository('TeamERPCustomerBundle:Customer')
                ->find($id);
        try {
            $em->remove($customer);
            $em->flush();
            $statusMessage = "Deleted";
        } catch (Exception $exception) {
            $statusMessage = $exception->getTraceAsString();
        }
        return $this->render('TeamERPCustomerBundle:Customer:delete.html.twig', array('status' => $statusMessage));
    }

    /*
     * List JSON: This method creates the list of all companies 
     * in the DB and returns it in a json array
     */

    private function createJSONListOfCompanies() {
        /* Create the autocomplete list */
        $ListOfCompanies = $this->getDoctrine()
                ->getManager()
                ->getRepository('TeamERPCustomerBundle:Company')
                ->findAll();
        foreach ($ListOfCompanies as $value) {
            $data[] = $value->getCompanyName();
        }
        if (isset($data)) {
            $data = json_encode($data);
        } else {
            $data = json_encode("Fill the company name");
        }
        return $data;
    }

    /*
     * Persist Customer function
     */

    private function persisCustomerAndCompany(Request $request, Customer $customer, $form) {
        $form->handleRequest($request);
        $statusMessage = "";
        //if ($form->isValid())            echo 'Is Valid';

        if ($form->isValid() && $request->getMethod() == 'POST') {
            try {
                //persist customer and company
                $em = $this->getDoctrine()->getManager();
                $em->persist($customer);
                $em->flush();
                $statusMessage = "Saved";
            } catch (Exception $exc) {
                $statusMessage = $exc->getTraceAsString();
            }
        }
        return $statusMessage;
    }

}
