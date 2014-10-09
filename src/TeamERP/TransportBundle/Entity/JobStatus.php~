<?php
namespace TeamERP\TransportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="job_status")
 */

class JobStatus
{
    /**
     * @ORM\Column(type="integer", name="id_job_status")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idJobStatus;
    /**
     * @ORM\Column(type="string", length=20, name="description")
     */
    protected $description; 
    /**
    * @ORM\OneToMany(targetEntity="Job", mappedBy="job_status")
    */
    protected $jobStatus;

    public function __construct()
    {
        $this->jobStatus = new ArrayCollection();
    }     

    /**
     * Get idJobStatus
     *
     * @return integer 
     */
    public function getIdJobStatus()
    {
        return $this->idJobStatus;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return JobStatus
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
     * Add jobStatus
     *
     * @param \TeamERP\TransportBundle\Entity\Job $jobStatus
     * @return JobStatus
     */
    public function addJobStatus(\TeamERP\TransportBundle\Entity\Job $jobStatus)
    {
        $this->jobStatus[] = $jobStatus;

        return $this;
    }

    /**
     * Remove jobStatus
     *
     * @param \TeamERP\TransportBundle\Entity\Job $jobStatus
     */
    public function removeJobStatus(\TeamERP\TransportBundle\Entity\Job $jobStatus)
    {
        $this->jobStatus->removeElement($jobStatus);
    }

    /**
     * Get jobStatus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobStatus()
    {
        return $this->jobStatus;
    }
}
