<?php
namespace TeamERP\BaseBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;
/**
 * @ORM\Entity
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code;    
    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $description;
    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $cost;
    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $qtyToPurchase;
    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $reorderPoint;
    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $qtyOnSalesOrder;
    /**
     * @ORM\ManyToOne(targetEntity="TeamERP\BaseBundle\Entity\Category", inversedBy="product", cascade={"persist"})
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;
    /**
     * @ORM\ManyToOne(targetEntity="TeamERP\BaseBundle\Entity\MeasureUnit", inversedBy="product", cascade={"persist"})
     */
    private $measureUnit;
    /**
     * @ORM\OneToMany(targetEntity="TeamERP\BaseBundle\Entity\ProductStockMove", mappedBy="product")
     */
    private $ProductStockMove;
    /**
     * Constructor
     */
    public function __construct()
    {
//        $this->pproductActivity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mesureUnit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ProductStockMove = new \Doctrine\Common\Collections\ArrayCollection();
    }
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
     * Set code
     *
     * @param string $code
     *
     * @return Product
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return Product
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set qtyToPurchase
     *
     * @param string $qtyToPurchase
     *
     * @return Product
     */
    public function setQtyToPurchase($qtyToPurchase)
    {
        $this->qtyToPurchase = $qtyToPurchase;

        return $this;
    }

    /**
     * Get qtyToPurchase
     *
     * @return string
     */
    public function getQtyToPurchase()
    {
        return $this->qtyToPurchase;
    }

    /**
     * Set reorderPoint
     *
     * @param string $reorderPoint
     *
     * @return Product
     */
    public function setReorderPoint($reorderPoint)
    {
        $this->reorderPoint = $reorderPoint;

        return $this;
    }

    /**
     * Get reorderPoint
     *
     * @return string
     */
    public function getReorderPoint()
    {
        return $this->reorderPoint;
    }

    /**
     * Set qtyOnSalesOrder
     *
     * @param string $qtyOnSalesOrder
     *
     * @return Product
     */
    public function setQtyOnSalesOrder($qtyOnSalesOrder)
    {
        $this->qtyOnSalesOrder = $qtyOnSalesOrder;

        return $this;
    }

    /**
     * Get qtyOnSalesOrder
     *
     * @return string
     */
    public function getQtyOnSalesOrder()
    {
        return $this->qtyOnSalesOrder;
    }

    /**
     * Set category
     *
     * @param \TeamERP\BaseBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\TeamERP\BaseBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \TeamERP\BaseBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set measureUnit
     *
     * @param \TeamERP\BaseBundle\Entity\MeasureUnit $measureUnit
     *
     * @return Product
     */
    public function setMeasureUnit(\TeamERP\BaseBundle\Entity\MeasureUnit $measureUnit = null)
    {
        $this->measureUnit = $measureUnit;

        return $this;
    }

    /**
     * Get measureUnit
     *
     * @return \TeamERP\BaseBundle\Entity\MeasureUnit
     */
    public function getMeasureUnit()
    {
        return $this->measureUnit;
    }

    /**
     * Add productStockMove
     *
     * @param \TeamERP\BaseBundle\Entity\ProductStockMove $productStockMove
     *
     * @return Product
     */
    public function addProductStockMove(\TeamERP\BaseBundle\Entity\ProductStockMove $productStockMove)
    {
        $this->ProductStockMove[] = $productStockMove;

        return $this;
    }

    /**
     * Remove productStockMove
     *
     * @param \TeamERP\BaseBundle\Entity\ProductStockMove $productStockMove
     */
    public function removeProductStockMove(\TeamERP\BaseBundle\Entity\ProductStockMove $productStockMove)
    {
        $this->ProductStockMove->removeElement($productStockMove);
    }

    /**
     * Get productStockMove
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductStockMove()
    {
        return $this->ProductStockMove;
    }
}
