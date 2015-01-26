<?php
namespace TeamERP\StoresBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class ActivityName
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(nullable=true)
     */
    private $activity_name;

    /**
     * @ORM\OneToMany(targetEntity="TeamERP\StoresBundle\Entity\ProductActivity", mappedBy="activityName")
     */
    private $productActivity;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productActivity = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set activity_name
     *
     * @param string $activityName
     * @return ActivityName
     */
    public function setActivityName($activityName)
    {
        $this->activity_name = $activityName;

        return $this;
    }

    /**
     * Get activity_name
     *
     * @return string 
     */
    public function getActivityName()
    {
        return $this->activity_name;
    }

    /**
     * Add productActivity
     *
     * @param \TeamERP\StoresBundle\Entity\ProductActivity $productActivity
     * @return ActivityName
     */
    public function addProductActivity(\TeamERP\StoresBundle\Entity\ProductActivity $productActivity)
    {
        $this->productActivity[] = $productActivity;

        return $this;
    }

    /**
     * Remove productActivity
     *
     * @param \TeamERP\StoresBundle\Entity\ProductActivity $productActivity
     */
    public function removeProductActivity(\TeamERP\StoresBundle\Entity\ProductActivity $productActivity)
    {
        $this->productActivity->removeElement($productActivity);
    }

    /**
     * Get productActivity
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductActivity()
    {
        return $this->productActivity;
    }
}
