<?php

namespace TeamERP\StoresBundle\Menu;

/**
 * Description of Builder
 *
 * @author Abel Guzman
 */
use TeamERP\BaseBundle\Menu\Builder;
use Symfony\Component\HttpFoundation\Request;

class BuilderLeftSideBarStores extends Builder {

    public function leftSideBarStores(Request $request) {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'nav'));
        if ($this->isLoggedIn == true) {
            if ($this->securityContext->isGranted('ROLE_USER_SALES')) {
                $menu->addChild('Customers', array('route' => 'team_erp_stores_dashboard',
                    'routeParameters' => array('page' => 1),
                            'labelAttributes' => array('icon' => 'fa fa-user')));
                $menu->addChild('Enquiry', array('route' => 'team_erp_stores_new_product',
                            'labelAttributes' => array('icon' => 'fa fa-money')));
            }
        }
        return $menu;
    }

}
