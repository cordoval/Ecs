<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Ecs\CrmBundle\Entity\PaymentMethod
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecs\CrmBundle\Entity\PaymentMethodRepository")
 */
class PaymentMethod
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")    */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="paymentmethods")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    protected $customer;
    
    /**
     * @var string $cardtype
     *
     * @ORM\Column(name="cardtype", type="string", length=5)
     */
    private $cardtype;

    /**
     * @var string $cardnumber
     *
     * @ORM\Column(name="cardnumber", type="string", length=17)
     */
    private $cardnumber;

    /**
     * @var string $expmonth
     *
     * @ORM\Column(name="expmonth", type="string", length=2)
     */
    private $expmonth;

    /**
     * @var string $expyear
     *
     * @ORM\Column(name="expyear", type="string", length=2)
     */
    private $expyear;

    /**
     * @var string $nameoncard
     *
     * @ORM\Column(name="nameoncard", type="string", length=255)
     */
    private $nameoncard;

    /**
     * @var string $firstname
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string $lastname
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string $address
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string $state
     *
     * @ORM\Column(name="state", type="string", length=2)
     */
    private $state;

    /**
     * @var string $zip
     *
     * @ORM\Column(name="zip", type="string", length=15)
     */
    private $zip;


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
     * Set cardtype
     *
     * @param string $cardtype
     */
    public function setCardtype($cardtype)
    {
        $this->cardtype = $cardtype;
    }

    /**
     * Get cardtype
     *
     * @return string 
     */
    public function getCardtype()
    {
        return $this->cardtype;
    }

    /**
     * Set cardnumber
     *
     * @param string $cardnumber
     */
    public function setCardnumber($cardnumber)
    {
        $this->cardnumber = $cardnumber;
    }

    /**
     * Get cardnumber
     *
     * @return string 
     */
    public function getCardnumber()
    {
        return $this->cardnumber;
    }

    /**
     * Set expmonth
     *
     * @param string $expmonth
     */
    public function setExpmonth($expmonth)
    {
        $this->expmonth = $expmonth;
    }

    /**
     * Get expmonth
     *
     * @return string 
     */
    public function getExpmonth()
    {
        return $this->expmonth;
    }

    /**
     * Set expyear
     *
     * @param string $expyear
     */
    public function setExpyear($expyear)
    {
        $this->expyear = $expyear;
    }

    /**
     * Get expyear
     *
     * @return string 
     */
    public function getExpyear()
    {
        return $this->expyear;
    }

    /**
     * Set nameoncard
     *
     * @param string $nameoncard
     */
    public function setNameoncard($nameoncard)
    {
        $this->nameoncard = $nameoncard;
    }

    /**
     * Get nameoncard
     *
     * @return string 
     */
    public function getNameoncard()
    {
        return $this->nameoncard;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * Set customer
     *
     * @param Ecs\CrmBundle\Entity\Customer $customer
     */
    public function setCustomer(\Ecs\CrmBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get customer
     *
     * @return Ecs\CrmBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}