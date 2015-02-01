<?php
namespace TeamERP\CustomerBundle\Menu;

/**
 * Description of Builder
 *
 * @author Abel Guzman
 */
use TeamERP\BaseBundle\Menu\Builder;
use Symfony\Component\HttpFoundation\Request;

class BuilderSalesLetfSideBar extends Builder {

    public function salesLeftSideBar(Request $request) {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'nav'));
        if ($this->isLoggedIn == true) {
            if ($this->securityContext->isGranted('ROLE_SALES')) {
                $menu->addChild('Customer', array('route' => 'team_erp_customer_index',
                    'routeParameters' => array('page' => 1),
                            'labelAttributes' => array('icon' => 'fa fa-user')))
                        ->addChild('New', array('route' => 'team_erp_customer_new'));
//                $menu->addChild('Enquiry', array('route' => 'team_erp_sales_homepage',
////                    'routeParameters' => array('page' => 1),
//                            'labelAttributes' => array('icon' => 'fa fa-money')))
//                        ->addChild('New', array('route' => 'team_erp_sales_enquiry_new'));                
            }
        }
        return $menu;
    }

}