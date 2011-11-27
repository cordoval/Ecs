<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ecs\CrmBundle\Entity\Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="PaymentMethod", mappedBy="customer")
     */
    private $paymentMethods;
    
    /**
     * @var datetime $registerDate
     *
     * @ORM\Column(name="register_date", type="date", nullable=false)
     */
    private $registerDate;

    /**
     * @var string $firstName
     *
     * @ORM\Column(name="first_name", type="string", length=30, nullable=false)
     */
    private $firstName;

    /**
     * @var string $middleName
     *
     * @ORM\Column(name="middle_name", type="string", length=30, nullable=true)
     */
    private $middleName;

    /**
     * @var string $lastName
     *
     * @ORM\Column(name="lastName", type="string", length=30, nullable=true)
     */
    private $lastName;

    /**
     * @var string $gender
     *
     * @ORM\Column(name="gender", type="string", length=5, nullable=true)
     */
    private $gender;

    /**
     * @var date $dob
     *
     * @ORM\Column(name="dob", type="date", nullable=true)
     */
    private $dob;

    /**
     * @var string $emailAddress
     *
     * @ORM\Column(name="email_address", type="string", length=75, nullable=true)
     */
    private $emailAddress;

    /**
     * @var string $phonePrimary
     *
     * @ORM\Column(name="phone_primary", type="string", length=16, nullable=true)
     */
    private $phonePrimary;

    /**
     * @var string $phoneSecondary
     *
     * @ORM\Column(name="phone_secondary", type="string", length=16, nullable=true)
     */
    private $phoneSecondary;

    /**
     * @var string $address1
     *
     * @ORM\Column(name="address1", type="string", length=60, nullable=true)
     */
    private $address1;

    /**
     * @var string $address2
     *
     * @ORM\Column(name="address2", type="string", length=60, nullable=true)
     */
    private $address2;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=60, nullable=true)
     */
    private $city;

    /**
     * @var string $state
     *
     * @ORM\Column(name="state", type="string", length=2, nullable=true)
     */
    private $state;

    /**
     * @var string $zip
     *
     * @ORM\Column(name="zip", type="string", length=15, nullable=true)
     */
    private $zip;

    /**
     * @var string $country
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=true)
     */
    private $country;

        /**
     * @var string $bestContactTime
     *
     * @ORM\Column(name="best_contact_time", type="string", length=25, nullable=true)
     */
    private $bestContactTime;
     
    
    function __construct()
    {
         $this->paymentMethods = new ArrayCollection();
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
     * @param datetime $registerDate
     */
    public function setRegisterDate(\DateTime $registerDate = null)
    {
        $this->registerDate = $registerDate;
    }

    /**
     * Get registerDate
     *
     * @return datetime 
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
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
     * Set gender
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
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
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
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
     * Set emailAddress
     *
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
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
     */
    public function setPhonePrimary($phonePrimary)
    {
        $this->phonePrimary = $phonePrimary;
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
     */
    public function setPhoneSecondary($phoneSecondary)
    {
        $this->phoneSecondary = $phoneSecondary;
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
     * Set country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
     * Set bestContactTime
     *
     * @param string $bestContactTime
     */
    public function setBestContactTime($bestContactTime)
    {
        $this->bestContactTime = $bestContactTime;
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
     * Add paymentmethods
     *
     * @param Ecs\CrmBundle\Entity\PaymentMethod $paymentmethods
     */
    public function addPaymentMethod(\Ecs\CrmBundle\Entity\PaymentMethod $paymentmethods)
    {
        $this->paymentmethods[] = $paymentmethods;
    }

    /**
     * Get paymentmethods
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPaymentmethods()
    {
        return $this->paymentmethods;
    }
}