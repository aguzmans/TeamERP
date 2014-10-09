<?php
namespace TeamERP\StoresBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class ProductActivity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $balace_type;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $action_quantity;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $action_requested;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $action_date;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cost_x_unit;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $supplier;

    /**
     * @ORM\ManyToOne(targetEntity="TeamERP\StoresBundle\Entity\ActivityName", inversedBy="productActivity")
     * @ORM\JoinColumn(name="activity_name_id", referencedColumnName="id")
     */
    private $activityName;

    /**
     * @ORM\ManyToOne(targetEntity="TeamERP\StoresBundle\Entity\Product", inversedBy="pproductActivity")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity="TeamERP\StoresBundle\Entity\MesureUnit", inversedBy="pproductActivity")
     * @ORM\JoinColumn(name="mesure_unit_id", referencedColumnName="id")
     */
    private $mesureUnit;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set balace_type
     *
     * @param string $balaceType
     * @return ProductActivity
     */
    public function setBalaceType($balaceType)
    {
        $this->balace_type = $balaceType;

        return $this;
    }

    /**
     * Get balace_type
     *
     * @return string 
     */
    public function getBalaceType()
    {
        return $this->balace_type;
    }

    /**
     * Set action_quantity
     *
     * @param float $actionQuantity
     * @return ProductActivity
     */
    public function setActionQuantity($actionQuantity)
    {
        $this->action_quantity = $actionQuantity;

        return $this;
    }

    /**
     * Get action_quantity
     *
     * @return float 
     */
    public function getActionQuantity()
    {
        return $this->action_quantity;
    }

    /**
     * Set action_requested
     *
     * @param float $actionRequested
     * @return ProductActivity
     */
    public function setActionRequested($actionRequested)
    {
        $this->action_requested = $actionRequested;

        return $this;
    }

    /**
     * Get action_requested
     *
     * @return float 
     */
    public function getActionRequested()
    {
        return $this->action_requested;
    }

    /**
     * Set action_date
     *
     * @param \DateTime $actionDate
     * @return ProductActivity
     */
    public function setActionDate($actionDate)
    {
        $this->action_date = $actionDate;

        return $this;
    }

    /**
     * Get action_date
     *
     * @return \DateTime 
     */
    public function getActionDate()
    {
        return $this->action_date;
    }

    /**
     * Set cost_x_unit
     *
     * @param float $costXUnit
     * @return ProductActivity
     */
    public function setCostXUnit($costXUnit)
    {
        $this->cost_x_unit = $costXUnit;

        return $this;
    }

    /**
     * Get cost_x_unit
     *
     * @return float 
     */
    public function getCostXUnit()
    {
        return $this->cost_x_unit;
    }

    /**
     * Set supplier
     *
     * @param string $supplier
     * @return ProductActivity
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return string 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set activityName
     *
     * @param \TeamERP\StoresBundle\Entity\ActivityName $activityName
     * @return ProductActivity
     */
    public function setActivityName(\TeamERP\StoresBundle\Entity\ActivityName $activityName = null)
    {
        $this->activityName = $activityName;

        return $this;
    }

    /**
     * Get activityName
     *
     * @return \TeamERP\StoresBundle\Entity\ActivityName 
     */
    public function getActivityName()
    {
        return $this->activityName;
    }

    /**
     * Set product
     *
     * @param \TeamERP\StoresBundle\Entity\Product $product
     * @return ProductActivity
     */
    public function setProduct(\TeamERP\StoresBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \TeamERP\StoresBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set mesureUnit
     *
     * @param \TeamERP\StoresBundle\Entity\MesureUnit $mesureUnit
     * @return ProductActivity
     */
    public function setMesureUnit(\TeamERP\StoresBundle\Entity\MesureUnit $mesureUnit = null)
    {
        $this->mesureUnit = $mesureUnit;

        return $this;
    }

    /**
     * Get mesureUnit
     *
     * @return \TeamERP\StoresBundle\Entity\MesureUnit 
     */
    public function getMesureUnit()
    {
        return $this->mesureUnit;
    }
}
