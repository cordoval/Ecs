<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ecs\CrmBundle\Entity\Customer
 *
 * @ORM\Table()
 */
class Customer
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var date $registerDate
     */
    private $registerDate;

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var string $middleName
     */
    private $middleName;

    /**
     * @var string $lastName
     */
    private $lastName;

    /**
     * @var string $gender
     */
    private $gender;

    /**
     * @var date $dob
     */
    private $dob;

    /**
     * @var string $ssnumber
     */
    private $ssnumber;

    /**
     * @var string $emailAddress
     */
    private $emailAddress;

    /**
     * @var string $phonePrimary
     */
    private $phonePrimary;

    /**
     * @var string $phoneSecondary
     */
    private $phoneSecondary;

    /**
     * @var string $address1
     */
    private $address1;

    /**
     * @var string $address2
     */
    private $address2;

    /**
     * @var string $city
     */
    private $city;

    /**
     * @var string $state
     */
    private $state;

    /**
     * @var string $zip
     */
    private $zip;

    /**
     * @var string $country
     */
    private $country;

    /**
     * @var booleon $ismarried
     */
    private $ismarried;

    /**
     * @var string $bestContactTime
     */
    private $bestContactTime;

    /**
     * @var booleon $ownhome
     */
    private $ownhome;

    /**
     * @var decimal $homepayment
     */
    private $homepayment;

    /**
     * @var string $timeataddress
     */
    private $timeataddress;

    /**
     * @var string $employer
     */
    private $employer;

    /**
     * @var string $position
     */
    private $position;

    /**
     * @var string $timeatemployer
     */
    private $timeatemployer;

    /**
     * @var integer $monhlyincome
     */
    private $monhlyincome;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $paymentMethods;

    /**
     * @var Ecs\CrmBundle\Entity\LeadType
     */
    private $leadType;

    /**
     * @var Ecs\CrmBundle\Entity\User
     */
    private $salesRep;

    public function __construct()
    {
        $this->paymentMethods = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set registerDate
     *
     * @param date $registerDate
     * @return Customer
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;
        return $this;
    }

    /**
     * Get registerDate
     *
     * @return date 
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     * @return Customer
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Get middleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Customer
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set dob
     *
     * @param date $dob
     * @return Customer
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
        return $this;
    }

    /**
     * Get dob
     *
     * @return date 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set ssnumber
     *
     * @param string $ssnumber
     * @return Customer
     */
    public function setSsnumber($ssnumber)
    {
        $this->ssnumber = $ssnumber;
        return $this;
    }

    /**
     * Get ssnumber
     *
     * @return string 
     */
    public function getSsnumber()
    {
        return $this->ssnumber;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return Customer
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set phonePrimary
     *
     * @param string $phonePrimary
     * @return Customer
     */
    public function setPhonePrimary($phonePrimary)
    {
        $this->phonePrimary = $phonePrimary;
        return $this;
    }

    /**
     * Get phonePrimary
     *
     * @return string 
     */
    public function getPhonePrimary()
    {
        return $this->phonePrimary;
    }

    /**
     * Set phoneSecondary
     *
     * @param string $phoneSecondary
     * @return Customer
     */
    public function setPhoneSecondary($phoneSecondary)
    {
        $this->phoneSecondary = $phoneSecondary;
        return $this;
    }

    /**
     * Get phoneSecondary
     *
     * @return string 
     */
    public function getPhoneSecondary()
    {
        return $this->phoneSecondary;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return Customer
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
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
     * @return Customer
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
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
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
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
     * @return Customer
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
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
     * @return Customer
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
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
     * Set country
     *
     * @param string $country
     * @return Customer
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set ismarried
     *
     * @param booleon $ismarried
     * @return Customer
     */
    public function setIsmarried(\booleon $ismarried)
    {
        $this->ismarried = $ismarried;
        return $this;
    }

    /**
     * Get ismarried
     *
     * @return booleon 
     */
    public function getIsmarried()
    {
        return $this->ismarried;
    }

    /**
     * Set bestContactTime
     *
     * @param string $bestContactTime
     * @return Customer
     */
    public function setBestContactTime($bestContactTime)
    {
        $this->bestContactTime = $bestContactTime;
        return $this;
    }

    /**
     * Get bestContactTime
     *
     * @return string 
     */
    public function getBestContactTime()
    {
        return $this->bestContactTime;
    }

    /**
     * Set ownhome
     *
     * @param booleon $ownhome
     * @return Customer
     */
    public function setOwnhome(\booleon $ownhome)
    {
        $this->ownhome = $ownhome;
        return $this;
    }

    /**
     * Get ownhome
     *
     * @return booleon 
     */
    public function getOwnhome()
    {
        return $this->ownhome;
    }

    /**
     * Set homepayment
     *
     * @param decimal $homepayment
     * @return Customer
     */
    public function setHomepayment($homepayment)
    {
        $this->homepayment = $homepayment;
        return $this;
    }

    /**
     * Get homepayment
     *
     * @return decimal 
     */
    public function getHomepayment()
    {
        return $this->homepayment;
    }

    /**
     * Set timeataddress
     *
     * @param string $timeataddress
     * @return Customer
     */
    public function setTimeataddress($timeataddress)
    {
        $this->timeataddress = $timeataddress;
        return $this;
    }

    /**
     * Get timeataddress
     *
     * @return string 
     */
    public function getTimeataddress()
    {
        return $this->timeataddress;
    }

    /**
     * Set employer
     *
     * @param string $employer
     * @return Customer
     */
    public function setEmployer($employer)
    {
        $this->employer = $employer;
        return $this;
    }

    /**
     * Get employer
     *
     * @return string 
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Customer
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set timeatemployer
     *
     * @param string $timeatemployer
     * @return Customer
     */
    public function setTimeatemployer($timeatemployer)
    {
        $this->timeatemployer = $timeatemployer;
        return $this;
    }

    /**
     * Get timeatemployer
     *
     * @return string 
     */
    public function getTimeatemployer()
    {
        return $this->timeatemployer;
    }

    /**
     * Set monhlyincome
     *
     * @param integer $monhlyincome
     * @return Customer
     */
    public function setMonhlyincome($monhlyincome)
    {
        $this->monhlyincome = $monhlyincome;
        return $this;
    }

    /**
     * Get monhlyincome
     *
     * @return integer 
     */
    public function getMonhlyincome()
    {
        return $this->monhlyincome;
    }

    /**
     * Add paymentMethods
     *
     * @param Ecs\CrmBundle\Entity\PaymentMethod $paymentMethods
     */
    public function addPaymentMethod(\Ecs\CrmBundle\Entity\PaymentMethod $paymentMethods)
    {
        $this->paymentMethods[] = $paymentMethods;
    }

    /**
     * Get paymentMethods
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Set leadType
     *
     * @param Ecs\CrmBundle\Entity\LeadType $leadType
     * @return Customer
     */
    public function setLeadType(\Ecs\CrmBundle\Entity\LeadType $leadType=null)
    {
        $this->leadType = $leadType;
        return $this;
    }

    /**
     * Get leadType
     *
     * @return Ecs\CrmBundle\Entity\LeadType 
     */
    public function getLeadType()
    {
        return $this->leadType;
    }

    /**
     * Set salesRep
     *
     * @param Ecs\CrmBundle\Entity\User $salesRep
     * @return Customer
     */
    public function setSalesRep(\Ecs\CrmBundle\Entity\User $salesRep=null)
    {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * Get salesRep
     *
     * @return Ecs\CrmBundle\Entity\User 
     */
    public function getSalesRep()
    {
        return $this->salesRep;
    }
}