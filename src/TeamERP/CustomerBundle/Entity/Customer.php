<?php
namespace TeamERP\CustomerBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="TeamERP\CustomerBundle\Entity\CustomerRepository")
 */
class Customer
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
    private $customer_name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $typeContact;
    
    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $postal_address;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $city_town_village;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $e_mail;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $land_line;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $cell_phone;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $fax;

    /**
     * @ORM\ManyToOne(targetEntity="TeamERP\CustomerBundle\Entity\Company", inversedBy="customer", cascade={"persist"})
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;

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
     * Set customer_name
     *
     * @param string $customerName
     * @return Customer
     */
    public function setCustomerName($customerName)
    {
        $this->customer_name = $customerName;

        return $this;
    }

    /**
     * Get customer_name
     *
     * @return string 
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postal_address
     *
     * @param string $postalAddress
     * @return Customer
     */
    public function setPostalAddress($postalAddress)
    {
        $this->postal_address = $postalAddress;

        return $this;
    }

    /**
     * Get postal_address
     *
     * @return string 
     */
    public function getPostalAddress()
    {
        return $this->postal_address;
    }

    /**
     * Set city_town_village
     *
     * @param string $cityTownVillage
     * @return Customer
     */
    public function setCityTownVillage($cityTownVillage)
    {
        $this->city_town_village = $cityTownVillage;

        return $this;
    }

    /**
     * Get city_town_village
     *
     * @return string 
     */
    public function getCityTownVillage()
    {
        return $this->city_town_village;
    }

    /**
     * Set e_mail
     *
     * @param string $eMail
     * @return Customer
     */
    public function setEMail($eMail)
    {
        $this->e_mail = $eMail;

        return $this;
    }

    /**
     * Get e_mail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->e_mail;
    }

    /**
     * Set land_line
     *
     * @param string $landLine
     * @return Customer
     */
    public function setLandLine($landLine)
    {
        $this->land_line = $landLine;

        return $this;
    }

    /**
     * Get land_line
     *
     * @return string 
     */
    public function getLandLine()
    {
        return $this->land_line;
    }

    /**
     * Set cell_phone
     *
     * @param string $cellPhone
     * @return Customer
     */
    public function setCellPhone($cellPhone)
    {
        $this->cell_phone = $cellPhone;

        return $this;
    }

    /**
     * Get cell_phone
     *
     * @return string 
     */
    public function getCellPhone()
    {
        return $this->cell_phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Customer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set company
     *
     * @param \TeamERP\CustomerBundle\Entity\Company $company
     * @return Customer
     */
    public function setCompany(\TeamERP\CustomerBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \TeamERP\CustomerBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }
//    public function __construct($aCustomerType) {
//        $this->type_contact=$aCustomerType;
//    }
    public function getTypeContact(){
        return $this->typeContact;
    }
    public function setTypeContact($aContactType){
        $this->typeContact = $aContactType;
    }
    
}
