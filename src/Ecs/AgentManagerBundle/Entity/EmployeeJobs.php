<?php

namespace Ecs\AgentManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\AgentManagerBundle\Entity\EmployeeJobs
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EmployeeJobs
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $job_title
     *
     * @ORM\Column(name="job_title", type="string", length=255)
     */
    private $job_title;

    /**
     * @var text $job_description
     *
     * @ORM\Column(name="job_description", type="text")
     */
    private $job_description;

    /**
     * @var float $starting_salary
     *
     * @ORM\Column(name="starting_salary", type="float")
     */
    private $starting_salary;

    /**
     * @var smallint $positions_available
     *
     * @ORM\Column(name="positions_available", type="smallint")
     */
    private $positions_available;

    /**
     * @var string $default_role
     *
     * @ORM\Column(name="default_role", type="string", length=255)
     */
    private $default_role;


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
     * Set job_title
     *
     * @param string $jobTitle
     * @return EmployeeJobs
     */
    public function setJobTitle($jobTitle)
    {
        $this->job_title = $jobTitle;
        return $this;
    }

    /**
     * Get job_title
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * Set job_description
     *
     * @param text $jobDescription
     * @return EmployeeJobs
     */
    public function setJobDescription($jobDescription)
    {
        $this->job_description = $jobDescription;
        return $this;
    }

    /**
     * Get job_description
     *
     * @return text 
     */
    public function getJobDescription()
    {
        return $this->job_description;
    }

    /**
     * Set starting_salary
     *
     * @param float $startingSalary
     * @return EmployeeJobs
     */
    public function setStartingSalary($startingSalary)
    {
        $this->starting_salary = $startingSalary;
        return $this;
    }

    /**
     * Get starting_salary
     *
     * @return float 
     */
    public function getStartingSalary()
    {
        return $this->starting_salary;
    }

    /**
     * Set positions_available
     *
     * @param smallint $positionsAvailable
     * @return EmployeeJobs
     */
    public function setPositionsAvailable($positionsAvailable)
    {
        $this->positions_available = $positionsAvailable;
        return $this;
    }

    /**
     * Get positions_available
     *
     * @return smallint 
     */
    public function getPositionsAvailable()
    {
        return $this->positions_available;
    }

    /**
     * Set default_role
     *
     * @param string $defaultRole
     * @return EmployeeJobs
     */
    public function setDefaultRole($defaultRole)
    {
        $this->default_role = $defaultRole;
        return $this;
    }

    /**
     * Get default_role
     *
     * @return string 
     */
    public function getDefaultRole()
    {
        return $this->default_role;
    }
}