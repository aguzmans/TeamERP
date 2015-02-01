<?php
namespace TeamERP\CustomerBundle\Entity;
use Doctrine\ORM\EntityRepository;
//use Doctrine\ORM\Query;

class CustomerRepository extends EntityRepository
{
    public function searchCustomer($criteria)
    {
        $q = $this->createQueryBuilder('c');
            $q->join('TeamERPCustomerBundle:Company', 'o', 
                        'WITH', 'c.company = o.id');
        if (isset($criteria) and $criteria!=""){
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
        }
        return $q->getQuery()->getResult();
    }
    public function arrayExportCustomer()
    {
        $em = $this->getEntityManager();

        $query = $em->createQuery('
            SELECT c, i
            FROM TeamERPCustomerBundle:Customer c
            JOIN c.company i');

        //$query->setParameter('id', '1');

        return $query->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY); 
    }    
}
