<?php
namespace TeamERP\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TeamERP\CustomerBundle\Form\DataTransformer\CompanyToTextTransformer;

class CSVController extends Controller
{
    public function exportAction()
    { 
        $pagerfanta = '';
        //Query DB
        $result = $this->getDoctrine()->getManager()
                ->getRepository('TeamERPCustomerBundle:Customer')
                ->arrayExportCustomer();
       foreach ($result as $key => &$value){
           $result[$key]['company'] = $value['company']['company_name'];
        }
        $exporter = $this->get('ee.dataexporter');
        $exporter->setOptions('csv', array('fileName' => 'Contacts'));
        $exporter->setColumns(array('[customer_name]' => 'Customer Name', '[address]' => 'Physical Address'
            , '[postal_address]' => 'Postal Address', '[city_town_village]' => 'City/Town/Village'
            , '[e_mail]' => 'E-mail', '[land_line]' => 'Land Line'
            , '[cell_phone]' => 'Cell', '[fax]' => 'Fax'
            , '[company]' => 'Company'));
        $exporter->setData($result);
        return $exporter->render();
    }  
}
