<?php
namespace TeamERP\BaseBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class StockMove
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\OneToMany(targetEntity="TeamERP\BaseBundle\Entity\ProductStockMove", mappedBy="stockmove")
     */
    private $product;
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $documentNumber;
     /**
     * @ORM\Column(type="boolean")
     */
     private $inOrOut;
     /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $description;
    /**
     * @ORM\Column(type="datetime")
     */
    private $date;
     /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creation_date;
    /**
     * @ORM\ManyToOne(targetEntity="TeamERP\CustomerBundle\Entity\Customer", inversedBy="stock_move", cascade={"persist"})
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set documentNumber
     *
     * @param string $documentNumber
     *
     * @return StockMove
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    /**
     * Get documentNumber
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * Set inOrOut
     *
     * @param boolean $inOrOut
     *
     * @return StockMove
     */
    public function setInOrOut($inOrOut)
    {
        $this->inOrOut = $inOrOut;

        return $this;
    }

    /**
     * Get inOrOut
     *
     * @return boolean
     */
    public function getInOrOut()
    {
        return $this->inOrOut;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return StockMove
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return StockMove
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return StockMove
     */
    public function setCreationDate($creationDate)
    {
        $this->creation_date = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Add product
     *
     * @param \TeamERP\BaseBundle\Entity\ProductStockMove $product
     *
     * @return StockMove
     */
    public function addProduct(\TeamERP\BaseBundle\Entity\ProductStockMove $product)
    {
        $this->product[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \TeamERP\BaseBundle\Entity\ProductStockMove $product
     */
    public function removeProduct(\TeamERP\BaseBundle\Entity\ProductStockMove $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set customer
     *
     * @param \TeamERP\CustomerBundle\Entity\Customer $customer
     *
     * @return StockMove
     */
    public function setCustomer(\TeamERP\CustomerBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \TeamERP\CustomerBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
