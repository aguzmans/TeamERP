<?php

namespace TeamERP\TransportBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * VehicleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JobRepository extends EntityRepository
{
    public function findByCriteria ($deliveryNo, $destination)
    {
        $dql = "SELECT j FROM TeamERPTransportBundle:Job j
                WHERE j.deliveryNo LIKE :deliveryNo
                AND j.destination LIKE :destination";
        return $this->getEntityManager()
            ->createQuery($dql)
                ->setParameter('deliveryNo', '%'.$deliveryNo.'%')
                ->setParameter('destination', '%'.$destination.'%')
                ->getResult();
    }
    public function findByDate($date){
                $query = $this->createQueryBuilder('j')
                //->select('v', 'f','j')
                //->join('j.Vehicles', 'v')
                //->join('v.fuelPurchaces', 'f')
                ->groupBy('v.plateNumber')
                ->getQuery()->getResult();
        return $query;
    }
}
