<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\CrmBundle\Entity\Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=false)
     */
    private $name;

    /**
     * @var decimal $price
     *
     * @ORM\Column(name="price", type="decimal", nullable=false)
     */
    private $price;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var boolean $reoccurring
     *
     * @ORM\Column(name="reoccurring", type="boolean", nullable=false)
     */
    private $reoccurring;

    /**
     * @var smallint $billFrequency
     *
     * @ORM\Column(name="bill_frequency", type="smallint", nullable=true)
     */
    private $billFrequency;

    /**
     * @var smallint $billTimes
     *
     * @ORM\Column(name="bill_times", type="smallint", nullable=true)
     */
    private $billTimes;

    /**
     * @var boolean $trial
     *
     * @ORM\Column(name="trial", type="boolean", nullable=true)
     */
    private $trial;

    /**
     * @var smallint $trialLength
     *
     * @ORM\Column(name="trial_length", type="smallint", nullable=true)
     */
    private $trialLength;

    /**
     * @var smallint $billdelay
     *
     * @ORM\Column(name="bill_delay", type="smallint", nullable=true)
     */
    private $billdelay;



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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param decimal $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return decimal 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
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
     * Set reoccurring
     *
     * @param boolean $reoccurring
     * @return Product
     */
    public function setReoccurring($reoccurring)
    {
        $this->reoccurring = $reoccurring;
        return $this;
    }

    /**
     * Get reoccurring
     *
     * @return boolean 
     */
    public function getReoccurring()
    {
        return $this->reoccurring;
    }

    /**
     * Set billFrequency
     *
     * @param smallint $billFrequency
     * @return Product
     */
    public function setBillFrequency($billFrequency)
    {
        $this->billFrequency = $billFrequency;
        return $this;
    }

    /**
     * Get billFrequency
     *
     * @return smallint 
     */
    public function getBillFrequency()
    {
        return $this->billFrequency;
    }

    /**
     * Set billTimes
     *
     * @param smallint $billTimes
     * @return Product
     */
    public function setBillTimes($billTimes)
    {
        $this->billTimes = $billTimes;
        return $this;
    }

    /**
     * Get billTimes
     *
     * @return smallint 
     */
    public function getBillTimes()
    {
        return $this->billTimes;
    }

    /**
     * Set trial
     *
     * @param boolean $trial
     * @return Product
     */
    public function setTrial($trial)
    {
        $this->trial = $trial;
        return $this;
    }

    /**
     * Get trial
     *
     * @return boolean 
     */
    public function getTrial()
    {
        return $this->trial;
    }

    /**
     * Set trialLength
     *
     * @param smallint $trialLength
     * @return Product
     */
    public function setTrialLength($trialLength)
    {
        $this->trialLength = $trialLength;
        return $this;
    }

    /**
     * Get trialLength
     *
     * @return smallint 
     */
    public function getTrialLength()
    {
        return $this->trialLength;
    }

    /**
     * Set billdelay
     *
     * @param smallint $billdelay
     * @return Product
     */
    public function setBilldelay($billdelay)
    {
        $this->billdelay = $billdelay;
        return $this;
    }

    /**
     * Get billdelay
     *
     * @return smallint 
     */
    public function getBilldelay()
    {
        return $this->billdelay;
    }
}