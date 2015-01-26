<?php
namespace TeamERP\TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="job_type")
 */

class JobType
{
    /**
     * @ORM\Column(type="integer", name="id_job_type")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idJobtype;
    /**
     * @ORM\Column(type="string", length=20, name="description")
     */
    protected $description; 
    /**
     * @ORM\Column(type="string", length=20, name="code")
     */    
    protected $code;
    /**
    * @ORM\OneToMany(targetEntity="Job", mappedBy="job_type")
    */
    protected $jobType;

    public function __construct()
    {
        $this->jobType = new ArrayCollection();
    }     

    /**
     * Get idJobtype
     *
     * @return integer 
     */
    public function getIdJobtype()
    {
        return $this->idJobtype;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Jobtype
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
     * Add jobType
     *
     * @param \TeamERP\TransportBundle\Entity\Job $jobType
     * @return Jobtype
     */
    public function addJobType(\TeamERP\TransportBundle\Entity\Job $jobType)
    {
        $this->jobType[] = $jobType;

        return $this;
    }

    /**
     * Remove jobType
     *
     * @param \TeamERP\TransportBundle\Entity\Job $jobType
     */
    public function removeJobType(\TeamERP\TransportBundle\Entity\Job $jobType)
    {
        $this->jobType->removeElement($jobType);
    }

    /**
     * Get jobType
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Jobtype
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
}
