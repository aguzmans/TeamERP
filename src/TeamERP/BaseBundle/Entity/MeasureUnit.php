<?php
namespace TeamERP\BaseBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class MeasureUnit
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $abreviation;
    /**
     * @ORM\OneToMany(targetEntity="TeamERP\BaseBundle\Entity\Product", mappedBy="mesureUnit")
     */
    private $product;    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pproductActivity = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return MesureUnit
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
     * Set abreviation
     *
     * @param string $abreviation
     * @return MesureUnit
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string 
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * Add pproductActivity
     *
     * @param \TeamERP\StoresBundle\Entity\ProductActivity $pproductActivity
     * @return MesureUnit
     */
    public function addPproductActivity(\TeamERP\StoresBundle\Entity\ProductActivity $pproductActivity)
    {
        $this->pproductActivity[] = $pproductActivity;

        return $this;
    }

    /**
     * Remove pproductActivity
     *
     * @param \TeamERP\StoresBundle\Entity\ProductActivity $pproductActivity
     */
    public function removePproductActivity(\TeamERP\StoresBundle\Entity\ProductActivity $pproductActivity)
    {
        $this->pproductActivity->removeElement($pproductActivity);
    }

    /**
     * Get pproductActivity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPproductActivity()
    {
        return $this->pproductActivity;
    }

    /**
     * Add product
     *
     * @param \TeamERP\StoresBundle\Entity\Product $product
     * @return MesureUnit
     */
    public function addProduct(\TeamERP\StoresBundle\Entity\Product $product)
    {
        $this->product[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \TeamERP\StoresBundle\Entity\Product $product
     */
    public function removeProduct(\TeamERP\StoresBundle\Entity\Product $product)
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
}
