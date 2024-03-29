<?php

namespace Ecs\AgentManagerBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ecs\AgentManagerBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecs\AgentManagerBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     *
     */
    protected $id;

    /**
     * @var string $first_name
     *
     */
    protected $first_name;

    /**
     * @var string $last_name
     *
     */
    protected $last_name;

    /**
     * @var string $phone
     *
     */
    protected $phone;

    /**
     * @var string $phone2
     *
     */
    protected $phone2;

    /**
     * @var string $address1
     *
     */
    protected $address1;

    /**
     * @var string $address2
     *
     */
    protected $address2;

    /**
     * @var string $city
     *
     */
    protected $city;

    /**
     * @var string $state
     *
     */
    protected $state;

    /**
     * @var string $zip
     *
     */
    protected $zip;

    /**
     * @var datetime $startdate
     *
     */
    protected $startdate;

    /**
     * @var string $employment_status
     *
     */
    protected $employment_status;

    /**
     * @var text $notes
     *
     */
    protected $notes;

	/**
	 * @var EmployeeJob $employeejob
     */
	protected $employeejob;


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
     * Set first_name
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
    }

    /**
     * Get phone2
     *
     * @return string 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set address1
     *
     * @param string $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set zip
     *
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set startdate
     *
     * @param datetime $startdate
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;
    }

    /**
     * Get startdate
     *
     * @return datetime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set employment_status
     *
     * @param string $employmentStatus
     */
    public function setEmploymentStatus($employmentStatus)
    {
        $this->employment_status = $employmentStatus;
    }

    /**
     * Get employment_status
     *
     * @return string 
     */
    public function getEmploymentStatus()
    {
        return $this->employment_status;
    }

    /**
     * Set notes
     *
     * @param text $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * Get notes
     *
     * @return text 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set employeejob
     *
     * @param Ecs\AgentManagerBundle\Entity\EmployeeJob $employeejob
     * @return User
     */
    public function setEmployeejob(\Ecs\AgentManagerBundle\Entity\EmployeeJob $employeejob=null)
    {
        $this->employeejob = $employeejob;
        return $this;
    }

    /**
     * Get employeejob
     *
     * @return Ecs\AgentManagerBundle\Entity\EmployeeJob 
     */
    public function getEmployeejob()
    {
        return $this->employeejob;
    }


}