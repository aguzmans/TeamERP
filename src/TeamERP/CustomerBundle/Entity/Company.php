<?php
namespace TeamERP\CustomerBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Company
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
    private $company_name;

    /**
     * @ORM\OneToMany(targetEntity="TeamERP\CustomerBundle\Entity\Customer", mappedBy="company")
     */
    private $customer;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customer = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set company_name
     *
     * @param string $companyName
     * @return Company
     */
    public function setCompanyName($companyName)
    {
        $this->company_name = $companyName;

        return $this;
    }

    /**
     * Get company_name
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Add customer
     *
     * @param \TeamERP\CustomerBundle\Entity\Customer $customer
     * @return Company
     */
    public function addCustomer(\TeamERP\CustomerBundle\Entity\Customer $customer)
    {
        $this->customer[] = $customer;

        return $this;
    }

    /**
     * Remove customer
     *
     * @param \TeamERP\CustomerBundle\Entity\Customer $customer
     */
    public function removeCustomer(\TeamERP\CustomerBundle\Entity\Customer $customer)
    {
        $this->customer->removeElement($customer);
    }

    /**
     * Get customer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
