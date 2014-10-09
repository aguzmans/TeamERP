<?php
namespace TeamERP\TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="job")
 * @ORM\Entity(repositoryClass="TeamERP\TransportBundle\Entity\JobRepository")
 */
class Job
{
    /**
     * @ORM\Column(type="integer", name="id_job")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idJob;
    /**
     * @ORM\Column(type="string", length=20, name="delivery_number")
     */
    protected $deliveryNo; 
    /**
     * @ORM\Column(type="datetime", name="date_time")
     */
    protected $dateTime;
    /**
     * @ORM\Column(type="string", length=200, name="destination")
     */
    protected $destination;      
    /**
     * @ORM\Column(type="float", name="km_odo_start", nullable=true)
     */    
    protected $kmOdoStart;   
    /**
     * @ORM\Column(type="float", name="km_odo_end", nullable=true)
     */    
    protected $kmOdoEnd;      

    /**
     * @ORM\Column(type="float", name="fuel_used", nullable=true) 
     */
    protected $fuelUsedLitre;
    /**
     * @ORM\Column(type="float", name="fuel_price", nullable=true) 
     */
    protected $fuelPrice;    
    /**
     * @ORM\Column(type="string", length=100, name="driver_name", nullable=true)
     */    
    protected $driverName;
    /**
     * @ORM\Column(type="string", length=250, name="crew_names", nullable=true)
     */    
    protected $crewNames;
    /**
     * @ORM\Column(type="string", length=7, name="triler_plate_number", nullable=true)
     */
    protected $trilerPlateNumber;
    /**
     * @ORM\Column(type="string", length=500, name="remarks", nullable=true)
     */
    protected $remarks;
    /**
     * @ORM\Column(type="string", length=500, name="return_load_plan", nullable=true)
     */
    protected $returnLoadPlan;
    /**
    * @ORM\ManyToOne(targetEntity="Vehicle", inversedBy="job")
    * @ORM\JoinColumn(name="id_vehicle", referencedColumnName="id_vehicle")
    */
    protected $Vehicles;    
    
    /**
    * @ORM\ManyToOne(targetEntity="JobStatus", inversedBy="job")
    * @ORM\JoinColumn(name="id_job_status", referencedColumnName="id_job_status")
    */
    protected $jobStatus;

    /**
    * @ORM\ManyToOne(targetEntity="JobType", inversedBy="job")
    * @ORM\JoinColumn(name="id_job_type", referencedColumnName="id_job_type")
    */
    protected $jobType;
    
    /* My functions Distance calculator*/
    public function getJobDistance ()
    {
        return $this->kmOdoEnd - $this->kmOdoStart;
    }
    /* My functions job cost calculator*/
    public function getJobFuelCost ()
    {
        return $this->fuelPrice * $this->fuelUsedLitre;
    }
    /*My functions cost per Km */
    public function getFuelCosdPerKm ()
    {
        if ($this->getJobFuelCost() > 0)            
            return round($this->getJobDistance()/$this->getJobFuelCost(),3);        
        return 0;
    }


    /**
     * Get idJob
     *
     * @return integer 
     */
    public function getIdJob()
    {
        return $this->idJob;
    }

    /**
     * Set deliveryNo
     *
     * @param string $deliveryNo
     * @return Job
     */
    public function setDeliveryNo($deliveryNo)
    {
        $this->deliveryNo = $deliveryNo;

        return $this;
    }

    /**
     * Get deliveryNo
     *
     * @return string 
     */
    public function getDeliveryNo()
    {
        return $this->deliveryNo;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return Job
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Job
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set kmOdoStart
     *
     * @param float $kmOdoStart
     * @return Job
     */
    public function setKmOdoStart($kmOdoStart)
    {
        $this->kmOdoStart = $kmOdoStart;

        return $this;
    }

    /**
     * Get kmOdoStart
     *
     * @return float 
     */
    public function getKmOdoStart()
    {
        return $this->kmOdoStart;
    }

    /**
     * Set kmOdoEnd
     *
     * @param float $kmOdoEnd
     * @return Job
     */
    public function setKmOdoEnd($kmOdoEnd)
    {
        $this->kmOdoEnd = $kmOdoEnd;

        return $this;
    }

    /**
     * Get kmOdoEnd
     *
     * @return float 
     */
    public function getKmOdoEnd()
    {
        return $this->kmOdoEnd;
    }

    /**
     * Set fuelUsedLitre
     *
     * @param float $fuelUsedLitre
     * @return Job
     */
    public function setFuelUsedLitre($fuelUsedLitre)
    {
        $this->fuelUsedLitre = $fuelUsedLitre;

        return $this;
    }

    /**
     * Get fuelUsedLitre
     *
     * @return float 
     */
    public function getFuelUsedLitre()
    {
        return $this->fuelUsedLitre;
    }

    /**
     * Set fuelPrice
     *
     * @param float $fuelPrice
     * @return Job
     */
    public function setFuelPrice($fuelPrice)
    {
        $this->fuelPrice = $fuelPrice;

        return $this;
    }

    /**
     * Get fuelPrice
     *
     * @return float 
     */
    public function getFuelPrice()
    {
        return $this->fuelPrice;
    }

    /**
     * Set driverName
     *
     * @param string $driverName
     * @return Job
     */
    public function setDriverName($driverName)
    {
        $this->driverName = $driverName;

        return $this;
    }

    /**
     * Get driverName
     *
     * @return string 
     */
    public function getDriverName()
    {
        return $this->driverName;
    }

    /**
     * Set crewNames
     *
     * @param string $crewNames
     * @return Job
     */
    public function setCrewNames($crewNames)
    {
        $this->crewNames = $crewNames;

        return $this;
    }

    /**
     * Get crewNames
     *
     * @return string 
     */
    public function getCrewNames()
    {
        return $this->crewNames;
    }

    /**
     * Set trilerPlateNumber
     *
     * @param string $trilerPlateNumber
     * @return Job
     */
    public function setTrilerPlateNumber($trilerPlateNumber)
    {
        $this->trilerPlateNumber = $trilerPlateNumber;

        return $this;
    }

    /**
     * Get trilerPlateNumber
     *
     * @return string 
     */
    public function getTrilerPlateNumber()
    {
        return $this->trilerPlateNumber;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return Job
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string 
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Set returnLoadPlan
     *
     * @param string $returnLoadPlan
     * @return Job
     */
    public function setReturnLoadPlan($returnLoadPlan)
    {
        $this->returnLoadPlan = $returnLoadPlan;

        return $this;
    }

    /**
     * Get returnLoadPlan
     *
     * @return string 
     */
    public function getReturnLoadPlan()
    {
        return $this->returnLoadPlan;
    }

    /**
     * Set Vehicles
     *
     * @param \TeamERP\TransportBundle\Entity\Vehicle $vehicles
     * @return Job
     */
    public function setVehicles(\TeamERP\TransportBundle\Entity\Vehicle $vehicles = null)
    {
        $this->Vehicles = $vehicles;

        return $this;
    }

    /**
     * Get Vehicles
     *
     * @return \TeamERP\TransportBundle\Entity\Vehicle 
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }

    /**
     * Set jobStatus
     *
     * @param \TeamERP\TransportBundle\Entity\JobStatus $jobStatus
     * @return Job
     */
    public function setJobStatus(\TeamERP\TransportBundle\Entity\JobStatus $jobStatus = null)
    {
        $this->jobStatus = $jobStatus;

        return $this;
    }

    /**
     * Get jobStatus
     *
     * @return \TeamERP\TransportBundle\Entity\JobStatus 
     */
    public function getJobStatus()
    {
        return $this->jobStatus;
    }

    /**
     * Set jobType
     *
     * @param \TeamERP\TransportBundle\Entity\JobType $jobType
     * @return Job
     */
    public function setJobType(\TeamERP\TransportBundle\Entity\JobType $jobType = null)
    {
        $this->jobType = $jobType;

        return $this;
    }

    /**
     * Get jobType
     *
     * @return \TeamERP\TransportBundle\Entity\JobType 
     */
    public function getJobType()
    {
        return $this->jobType;
    }
}
