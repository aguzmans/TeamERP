<?php
namespace TeamERP\TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fuel_purchase")
 * @ORM\Entity(repositoryClass="TeamERP\TransportBundle\Entity\FuelPurchaseRepository")
 */

class FuelPurchase
{
    /**
     * @ORM\Column(type="integer", name="id_fuel_purchase")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idFuelPurchase;
    /**
     * @ORM\Column(type="string", length=20, name="invoice_number")
     */
    protected $invoice; 
    /**
     * @ORM\Column(type="datetime", name="date_time")
     */
    protected $dateTime;
    /**
     * @ORM\Column(type="float", name="fuel_used", nullable=true) 
     */
    protected $fuelUsed;
    /**
     * @ORM\Column(type="float", name="fuel_price", nullable=true) 
     */
    protected $fuelPrice;
    /**
     * @ORM\Column(type="float", name="km_odo", nullable=true)
     */    
    protected $kmOdo;    
    /**
    * @ORM\ManyToOne(targetEntity="Vehicle", inversedBy="FuelPurchace")
    * @ORM\JoinColumn(name="id_vehicle", referencedColumnName="id_vehicle")
    */
    protected $vehicles;
    /**
    * @ORM\Column(type="string", length=250, name="refuling_remarks", nullable=true)
    */
    protected $remarks;
    /**
    * @ORM\Column(type="string", length=100, name="refuling_person", nullable=true)
    */
    protected $refueler;    
    
    /* My functions job cost calculator*/
    public function getFuelCost ()
    {
        return $this->fuelPrice * $this->fuelUsed;
    }
    /**
     * Get idFuelPurchace
     *
     * @return integer 
     */
    public function getIdFuelPurchace()
    {
        return $this->idFuelPurchace;
    }

    /**
     * Set invoice
     *
     * @param string $invoice
     * @return FuelPurchase
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return string 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return FuelPurchase
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
     * Set fuelUsedLitre
     *
     * @param float $fuelUsedLitre
     * @return FuelPurchase
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
     * @return FuelPurchase
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
     * Set remarks
     *
     * @param string $remarks
     * @return FuelPurchase
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
     * Set vehicles
     *
     * @param \TeamERP\TransportBundle\Entity\Vehicle $vehicles
     * @return FuelPurchase
     */
    public function setVehicles(\TeamERP\TransportBundle\Entity\Vehicle $vehicles = null)
    {
        $this->vehicles = $vehicles;

        return $this;
    }

    /**
     * Get vehicles
     *
     * @return \TeamERP\TransportBundle\Entity\Vehicle 
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Set fuelUsed
     *
     * @param float $fuelUsed
     * @return FuelPurchase
     */
    public function setFuelUsed($fuelUsed)
    {
        $this->fuelUsed = $fuelUsed;

        return $this;
    }

    /**
     * Get fuelUsed
     *
     * @return float 
     */
    public function getFuelUsed()
    {
        return $this->fuelUsed;
    }

    /**
     * Set kmOdo
     *
     * @param float $kmOdo
     * @return FuelPurchase
     */
    public function setKmOdo($kmOdo)
    {
        $this->kmOdo = $kmOdo;

        return $this;
    }

    /**
     * Get kmOdo
     *
     * @return float 
     */
    public function getKmOdo()
    {
        return $this->kmOdo;
    }

    /**
     * Set refueler
     *
     * @param string $refueler
     * @return FuelPurchase
     */
    public function setRefueler($refueler)
    {
        $this->refueler = $refueler;

        return $this;
    }

    /**
     * Get refueler
     *
     * @return string 
     */
    public function getRefueler()
    {
        return $this->refueler;
    }

    /**
     * Get idFuelPurchase
     *
     * @return integer 
     */
    public function getIdFuelPurchase()
    {
        return $this->idFuelPurchase;
    }
}
