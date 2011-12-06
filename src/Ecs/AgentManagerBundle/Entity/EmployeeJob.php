<?php

namespace Ecs\AgentManagerBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\AgentManagerBundle\Entity\EmployeeJob
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EmployeeJob
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $job_title
     */
    private $job_title;

    /**
     * @var text $job_description
     */
    private $job_description;

    /**
     * @var float $starting_salary
     */
    private $starting_salary;

    /**
     * @var smallint $positions_available
     */
    private $positions_available;

    /**
     * @var string $default_role
     */
    private $default_role;

    /**
	* @var ArrayCollection $users
    */
	private $users;

	function __construct()
	{
		$this->users = new ArrayCollection();
	}

	function __toString()
	{
		return $this->getJobTitle();
	}
    /**
     * Get id
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
		if(is_array($defaultRole)) $defaultRole = serialize($defaultRole);
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
        return unserialize($this->default_role);
    }

    /**
     * Set users
     *
     * @param Ecs\AgentManagerBundle\Entity\User $users
     * @return EmployeeJob
     */
    public function setUsers(\Ecs\AgentManagerBundle\Entity\User $users=null)
    {
        $this->users = $users;
        return $this;
    }

    /**
     * Get users
     *
     * @return Ecs\AgentManagerBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add users
     *
     * @param Ecs\AgentManagerBundle\Entity\User $users
     */
    public function addUser(\Ecs\AgentManagerBundle\Entity\User $users)
    {
        $this->users[] = $users;
    }
}