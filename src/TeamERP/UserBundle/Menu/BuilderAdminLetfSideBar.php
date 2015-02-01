<?php

namespace TeamERP\UserBundle\Menu;

/**
 * Description of Builder
 *
 * @author Abel Guzman
 */
use TeamERP\BaseBundle\Menu\Builder;
use Symfony\Component\HttpFoundation\Request;

class BuilderAdminLetfSideBar extends Builder {

    public function adminLeftSideBar(Request $request) {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'nav'));
        if ($this->isLoggedIn == true) {
            if ($this->securityContext->isGranted('ROLE_COMPANY_ADMIN')) {
                $menu->addChild('Users', array('route' => 'teamerp_user_main',
//                    'routeParameters' => array('page' => 1),
                            'labelAttributes' => array('icon' => 'fa fa-user')));
//                        ->addChild('New', array('route' => 'team_erp_customer_new'));
//                $menu->addChild('Enquiry', array('route' => 'team_erp_sales_homepage',
////                    'routeParameters' => array('page' => 1),
//                            'labelAttributes' => array('icon' => 'fa fa-money')))
//                        ->addChild('New', array('route' => 'team_erp_sales_enquiry_new'));                
            }
        }
        return $menu;
    }

}
