<?php
namespace TeamERP\CustomerBundle\Entity;
use Doctrine\ORM\EntityRepository;
//use Doctrine\ORM\Query;

class CustomerRepository extends EntityRepository
{
    public function searchCustomer($criteria, $output = null)
    {
        $q = $this->createQueryBuilder('c');
        if($output != null){
            $q->add('select', 'c, o');
        }
        $q->join('TeamERPCustomerBundle:Company', 'o', 
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
 
        if ($output != null){   
            $q = $q->getQuery()->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
            for($i = 0; $i<count($q); $i=$i+2){
               if(isset($q[$i+1]) and count($q[$i+1])==2){
                   $a[] =  array_merge($q[$i],$q[$i+1]);
               }
            }          
            return $a;
        }
        return $q->getQuery()->getResult();
    }
}
