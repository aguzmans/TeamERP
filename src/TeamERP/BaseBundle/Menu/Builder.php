<?php

namespace TeamERP\BaseBundle\Menu;

/**
 * Description of Builder
 *
 * @author Abel Guzman
 */
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class Builder extends ContainerAware {

    protected $factory;
    protected $securityContext;
    protected $isLoggedIn;

    public function __construct(FactoryInterface $factory, SecurityContextInterface $securityContext) {
        $this->factory = $factory;
        $this->securityContext = $securityContext;
        $this->isLoggedIn = $this->securityContext->isGranted('IS_AUTHENTICATED_FULLY');
    }

    public function mainMenu(Request $request) {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'nav nav-pills'));
        $menu->addChild('Home', array('route' => 'team_erp_base_homepage',
            'labelAttributes' => array('icon' => 'fa fa-home')));
        if ($this->isLoggedIn == true) {
            if ($this->securityContext->isGranted("ROLE_SALES")) {
                $menu->addChild('Sales', array('route' => 'team_erp_customer_index',
                    'routeParameters' => array('page' => 1),
                    'labelAttributes' => array('icon' => 'fa fa-money')));
            }
            if ($this->securityContext->isGranted("ROLE_COMPANY_ADMIN")) {
                $menu->addChild('Stores', array('route' => 'team_erp_stores_dashboard',
                    'labelAttributes' => array('icon' => 'fa fa-cogs')));
            }            
            if ($this->securityContext->isGranted("ROLE_COMPANY_ADMIN")) {
                $menu->addChild('Admin', array('route' => 'teamerp_user_main',
                    'labelAttributes' => array('icon' => 'fa fa-wheelchair')));
            }            
        }
        return $menu;
    }

}
