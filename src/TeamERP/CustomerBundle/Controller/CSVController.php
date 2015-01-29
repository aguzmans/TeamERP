<?php

namespace TeamERP\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TeamERP\CustomerBundle\Model\exportContacts;

class CSVController extends Controller
{

    public function exportAction(Request $request)
    { 
        $result = '';
        $customerInfo = '';
        $pagerfanta = '';

        //if the form is sent by post search in the DB
        if ($request->getMethod() == 'GET') {
            //get the customer information from the form
            $customerInfo = $request->request->get('customer');
            $customerInfo = $customerInfo['customer_info'];
            //Query DB
           //
            $result = $this->getDoctrine()->getManager()
                    ->getRepository('TeamERPCustomerBundle:Customer')
                    ->searchCustomer($customerInfo,"1");
            //Export to CSV
            $exporter = $this->get('ee.dataexporter');
            $exporter->setOptions('csv', array('fileName' => 'Contacts'));
            $exporter->setColumns(array('[customer_name]' => 'Customer Name', '[address]' => 'Physical Address'
                , '[postal_address]' => 'Postal Address', '[city_town_village]' => 'City/Town/Village'
                , '[e_mail]' => 'E-mail', '[land_line]' => 'Land Line'
                , '[cell_phone]' => 'Cell', '[fax]' => 'Fax'
                , '[company_name]' => 'Company'));
            $exporter->setData($result);
            return $exporter->render();
        }
    }  
}
