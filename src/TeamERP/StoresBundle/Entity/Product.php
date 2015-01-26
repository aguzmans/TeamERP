<?php
namespace TeamERP\StoresBundle\Entity;
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
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_received;

    /**
     * @ORM\OneToMany(targetEntity="TeamERP\StoresBundle\Entity\ProductActivity", mappedBy="product")
     */
    private $pproductActivity;

    /**
     * @ORM\ManyToOne(targetEntity="TeamERP\StoresBundle\Entity\Category", inversedBy="product")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="TeamERP\StoresBundle\Entity\AJob", inversedBy="product")
     * @ORM\JoinColumn(name="job_id", referencedColumnName="id")
     */
    private $aJob;

    /**
     * @ORM\ManyToMany(targetEntity="TeamERP\StoresBundle\Entity\MesureUnit", inversedBy="product")
     * @ORM\JoinTable(
     *     name="MesureUnit2Product",
     *     joinColumns={@ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="mesure_unit_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $mesureUnit;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pproductActivity = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mesureUnit = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set description
     *
     * @param string $description
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
     * Set date_received
     *
     * @param \DateTime $dateReceived
     * @return Product
     */
    public function setDateReceived($dateReceived)
    {
        $this->date_received = $dateReceived;

        return $this;
    }

    /**
     * Get date_received
     *
     * @return \DateTime 
     */
    public function getDateReceived()
    {
        return $this->date_received;
    }

    /**
     * Add pproductActivity
     *
     * @param \TeamERP\StoresBundle\Entity\ProductActivity $pproductActivity
     * @return Product
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
     * Set category
     *
     * @param \TeamERP\StoresBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\TeamERP\StoresBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \TeamERP\StoresBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set job
     *
     * @param \TeamERP\StoresBundle\Entity\Job $job
     * @return Product
     */
    public function setJob(\TeamERP\StoresBundle\Entity\AJob $ajob = null)
    {
        $this->ajob = $ajob;

        return $this;
    }

    /**
     * Get job
     *
     * @return \TeamERP\StoresBundle\Entity\Job 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Add mesureUnit
     *
     * @param \TeamERP\StoresBundle\Entity\MesureUnit $mesureUnit
     * @return Product
     */
    public function addMesureUnit(\TeamERP\StoresBundle\Entity\MesureUnit $mesureUnit)
    {
        $this->mesureUnit[] = $mesureUnit;

        return $this;
    }

    /**
     * Remove mesureUnit
     *
     * @param \TeamERP\StoresBundle\Entity\MesureUnit $mesureUnit
     */
    public function removeMesureUnit(\TeamERP\StoresBundle\Entity\MesureUnit $mesureUnit)
    {
        $this->mesureUnit->removeElement($mesureUnit);
    }

    /**
     * Get mesureUnit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMesureUnit()
    {
        return $this->mesureUnit;
    }
}
