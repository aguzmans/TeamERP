<?php
namespace TeamERP\CustomerBundle\Entity;
use Doctrine\ORM\EntityRepository;

class CustomerRepository extends EntityRepository
{
    public function searchCustomer($criteria,$page = 0)
    {
        $q = $this->createQueryBuilder('c')
                ->join('TeamERPCustomerBundle:Company', 'o', 
                        'WITH', 'c.company = o.id');
        $q->orWhere(sprintf("c.customer_name like '%s'", '%'.$criteria.'%'));
        $q->orWhere(sprintf("c.address like '%s'", '%'.$criteria.'%'));
        $q->orWhere(sprintf("c.postal_address like '%s'", '%'.$criteria.'%'));
        $q->orWhere(sprintf("c.city_town_village like '%s'", '%'.$criteria.'%'));
        $q->orWhere(sprintf("c.e_mail like '%s'", '%'.$criteria.'%'));
        $q->orWhere(sprintf("c.land_line like '%s'", '%'.$criteria.'%'));
        $q->orWhere(sprintf("c.cell_phone like '%s'", '%'.$criteria.'%'));
        $q->orWhere(sprintf("c.fax like '%s'", '%'.$criteria.'%'));
        $q->orWhere(sprintf("c.cell_phone like '%s'", '%'.$criteria.'%'));
        $q->orWhere(sprintf("o.company_name like '%s'", '%'.$criteria.'%'));
//        $q->setMaxResults(5);
//        $q->setFirstResult($page*5);    
        return $q->getQuery()->getResult();
    }
}
