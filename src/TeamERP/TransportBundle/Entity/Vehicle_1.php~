<?php
namespace TeamERP\TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="vehicle")
 * @ORM\Entity(repositoryClass="TeamERP\TransportBundle\Entity\VehicleRepository")
 */
/*
 * Vehicle: Registration number, make, model, Distance required for , 
 * type of car service in Km. 
 */
class Vehicle
{
    /**
     * @ORM\Column(type="integer", name="id_vehicle")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idVehicle;
    /**
     * @ORM\Column(type="string", length=7, name="plate_number")
     */
    protected $plateNumber;
    
    /**
     * @ORM\Column(type="integer", name="distance_to_service")
     */ 
    protected $DistanceToServiceKm;
    /**
     * @ORM\Column(type="integer", name="last_service_odo")
     */ 
    protected $lastServiceODOKm; 
    /**
     * @ORM\Column(type="string", length=100, name="make")
     */
    protected $makeName;   
    /**
     * @ORM\Column(type="string", length=100, name="model")
     */
    protected $modelName;
    
    /**
    * @ORM\OneToMany(targetEntity="Job", mappedBy="Vehicles")
    */
    protected $jobs;

    /**
    * @ORM\OneToMany(targetEntity="FuelPurchase", mappedBy="vehicles")
    */
   protected $fuelPurchaces;
   
    public function __construct()
    {
        $this->jobs = new ArrayCollection();
        $this->fuelPurchaces = new ArrayCollection();
    }    

    /**
     * Get idVehicle
     *
     * @return integer 
     */
    public function getIdVehicle()
    {
        return $this->idVehicle;
    }

    /**
     * Set plateNumber
     *
     * @param string $plateNumber
     * @return Vehicle
     */
    public function setPlateNumber($plateNumber)
    {
        $this->plateNumber = $plateNumber;

        return $this;
    }

    /**
     * Get plateNumber
     *
     * @return string 
     */
    public function getPlateNumber()
    {
        return $this->plateNumber;
    }

    /**
     * Set DistanceToServiceKm
     *
     * @param integer $distanceToServiceKm
     * @return Vehicle
     */
    public function setDistanceToServiceKm($distanceToServiceKm)
    {
        $this->DistanceToServiceKm = $distanceToServiceKm;

        return $this;
    }

    /**
     * Get DistanceToServiceKm
     *
     * @return integer 
     */
    public function getDistanceToServiceKm()
    {
        return $this->DistanceToServiceKm;
    }

    /**
     * Set lastServiceODOKm
     *
     * @param integer $lastServiceODOKm
     * @return Vehicle
     */
    public function setLastServiceODOKm($lastServiceODOKm)
    {
        $this->lastServiceODOKm = $lastServiceODOKm;

        return $this;
    }

    /**
     * Get lastServiceODOKm
     *
     * @return integer 
     */
    public function getLastServiceODOKm()
    {
        return $this->lastServiceODOKm;
    }

    /**
     * Set makeName
     *
     * @param string $makeName
     * @return Vehicle
     */
    public function setMakeName($makeName)
    {
        $this->makeName = $makeName;

        return $this;
    }

    /**
     * Get makeName
     *
     * @return string 
     */
    public function getMakeName()
    {
        return $this->makeName;
    }

    /**
     * Set modelName
     *
     * @param string $modelName
     * @return Vehicle
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;

        return $this;
    }

    /**
     * Get modelName
     *
     * @return string 
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Add jobs
     *
     * @param \TeamERP\TransportBundle\Entity\Job $jobs
     * @return Vehicle
     */
    public function addJob(\TeamERP\TransportBundle\Entity\Job $jobs)
    {
        $this->jobs[] = $jobs;

        return $this;
    }

    /**
     * Remove jobs
     *
     * @param \TeamERP\TransportBundle\Entity\Job $jobs
     */
    public function removeJob(\TeamERP\TransportBundle\Entity\Job $jobs)
    {
        $this->jobs->removeElement($jobs);
    }

    /**
     * Get jobs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Add fuelPurchaces
     *
     * @param \TeamERP\TransportBundle\Entity\FuelPurchase $fuelPurchaces
     * @return Vehicle
     */
    public function addFuelPurchace(\TeamERP\TransportBundle\Entity\FuelPurchase $fuelPurchaces)
    {
        $this->fuelPurchaces[] = $fuelPurchaces;

        return $this;
    }

    /**
     * Remove fuelPurchaces
     *
     * @param \TeamERP\TransportBundle\Entity\FuelPurchase $fuelPurchaces
     */
    public function removeFuelPurchace(\TeamERP\TransportBundle\Entity\FuelPurchase $fuelPurchaces)
    {
        $this->fuelPurchaces->removeElement($fuelPurchaces);
    }

    /**
     * Get fuelPurchaces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFuelPurchaces()
    {
        return $this->fuelPurchaces;
    }
}
