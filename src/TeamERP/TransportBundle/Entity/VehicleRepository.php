<?php

namespace TeamERP\TransportBundle\Entity;

use Doctrine\ORM\EntityRepository;

class VehicleRepository extends EntityRepository
{
    /* Find vehicle fuel log stats*/
    private function findByFuelXVehicle ($dateStart = null, $dateEnd=null)
    {
        $query = $this->createQueryBuilder('v')
                ->select('v.plateNumber',
                        'SUM(f.fuelUsed) as totalFuel',
                        'SUM(f.fuelUsed*f.fuelPrice) as totalFuelCost')
                ->join('v.fuelPurchaces', 'f');
                if ($dateStart != null && $dateEnd != null){
                            $query->where('f.dateTime > :dateStart and f.dateTime < :dateEnd')
                            ->setParameter('dateStart', $dateStart)
                            ->setParameter('dateEnd', $dateEnd);
                        }
                $q =$query->groupBy('v.plateNumber')
                ->getQuery()->getResult();
        return $q;
    }
    /* Find vehicle Job stats*/
    private function findByJobXVehicle($dateStart = null, $dateEnd=null){
        $query = $this->createQueryBuilder('v')
                    ->select('v.plateNumber'
                            ,'SUM(j.kmOdoEnd - j.kmOdoStart) as totalDistance',
                        'COUNT(j.idJob) as countJob')
                    ->join('v.jobs', 'j');
                    if ($dateStart != null && $dateEnd != null){                
                        $query->where('j.dateTime > :dateStart and j.dateTime < :dateEnd')
                        ->setParameter('dateStart', $dateStart)
                        ->setParameter('dateEnd', $dateEnd);
                    }
                    $query->groupBy('v.plateNumber');
                 $q = $query->getQuery()->getResult();
        return $q;
    }
    /* Join stats for fuel logs and Jobs*/
    public function findByIntegrated ($dateStart = null, $dateEnd=null)
    {
        $fuels = $this->findByFuelXVehicle($dateStart, $dateEnd);
        $jobs = $this->findByJobXVehicle($dateStart, $dateEnd);
        $jobAndFuel = null;
        foreach ($jobs as $key => $job){
             $jobAndFuel[$key]['plateNumber']=$job['plateNumber'];
             $jobAndFuel[$key]['totalDistance']=$job['totalDistance'];
             $jobAndFuel[$key]['countJob']=$job['countJob'];
        }
        //var_dump($fuels);
        $aux = $this->mergeWithJobs($jobAndFuel, $fuels);
         return $aux;
    }
    /* Merge arrays for fuel and jobs; join both array*/
    private function mergeWithJobs ($jobAndFuel, $fuels){
        //var_dump($jobAndFuel);
            for ($i =0;$i<count($fuels);$i++){
                $key = $this->searchArray($jobAndFuel, $fuels[$i]['plateNumber']);

                if ( $key >= 0 ) { 
                        $jobAndFuel[$key]['totalFuel']=$fuels[$i]['totalFuel'];
                        $jobAndFuel[$key]['totalFuelCost']=  round($fuels[$i]['totalFuelCost'], 2);                    
                } else {
                    $aux = count($jobAndFuel);
                        $jobAndFuel[$aux+1]['plateNumber']=$fuels[$i]['plateNumber'];
                        $jobAndFuel[$aux+1]['totalFuel']=$fuels[$i]['totalFuel'];
                        $jobAndFuel[$aux+1]['totalFuelCost']=round($fuels[$i]['totalFuelCost'], 2);
                }
            }
        return $jobAndFuel;            
    }
    /*Serch for a value in a bidimantional array;
     * consider moving this function to more a general class*/
    private function searchArray ($arrayOfResults, $needle)
    {
       foreach($arrayOfResults as $key => $arrayOfResult)
       {
          if ( $arrayOfResult['plateNumber'] === $needle )
             return $key;
       }
       return -1;
    }
}
