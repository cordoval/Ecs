<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\CrmBundle\Entity\Purchase
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecs\CrmBundle\Entity\PurchaseRepository")
 */
class Purchase
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
     * @var integer $product
     *
     * @ORM\Column(name="product", type="integer")
     */
    private $product;

    /**
     * @var integer $preferedpaymentmethod
     *
     * @ORM\Column(name="preferedpaymentmethod", type="integer")
     */
    private $preferedpaymentmethod;
    
    /**
     * @var date $purchasedate
     *
     * @ORM\Column(name="purchasedate", type="date")
     */
    private $purchasedate;

    /**
     * @var decimal $initialamount
     *
     * @ORM\Column(name="initialamount", type="decimal")
     */
    private $initialamount;

    /**
     * @var boolean $reoccurs
     *
     * @ORM\Column(name="reoccurs", type="boolean")
     */
    private $reoccurs;

    /**
     * @var integer $billtimes
     *
     * @ORM\Column(name="billtimes", type="integer")
     */
    private $billtimes;

    /**
     * @var date $nextbilldate
     *
     * @ORM\Column(name="nextbilldate", type="date")
     */
    private $nextbilldate;

    /**
     * @var integer $failedbillcount
     *
     * @ORM\Column(name="failedbillcount", type="integer")
     */
    private $failedbillcount;

    /**
     * @var integer $timesbilled
     *
     * @ORM\Column(name="timesbilled", type="integer")
     */
    private $timesbilled;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;




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
     * Set product
     *
     * @param integer $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * Get product
     *
     * @return integer 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set purchasedate
     *
     * @param date $purchasedate
     */
    public function setPurchasedate($purchasedate)
    {
        $this->purchasedate = $purchasedate;
    }

    /**
     * Get purchasedate
     *
     * @return date 
     */
    public function getPurchasedate()
    {
        return $this->purchasedate;
    }

    /**
     * Set initialamount
     *
     * @param decimal $initialamount
     */
    public function setInitialamount($initialamount)
    {
        $this->initialamount = $initialamount;
    }

    /**
     * Get initialamount
     *
     * @return decimal 
     */
    public function getInitialamount()
    {
        return $this->initialamount;
    }

    /**
     * Set reoccurs
     *
     * @param boolean $reoccurs
     */
    public function setReoccurs($reoccurs)
    {
        $this->reoccurs = $reoccurs;
    }

    /**
     * Get reoccurs
     *
     * @return boolean 
     */
    public function getReoccurs()
    {
        return $this->reoccurs;
    }

    /**
     * Set billtimes
     *
     * @param integer $billtimes
     */
    public function setBilltimes($billtimes)
    {
        $this->billtimes = $billtimes;
    }

    /**
     * Get billtimes
     *
     * @return integer 
     */
    public function getBilltimes()
    {
        return $this->billtimes;
    }

    /**
     * Set nextbilldate
     *
     * @param date $nextbilldate
     */
    public function setNextbilldate($nextbilldate)
    {
        $this->nextbilldate = $nextbilldate;
    }

    /**
     * Get nextbilldate
     *
     * @return date 
     */
    public function getNextbilldate()
    {
        return $this->nextbilldate;
    }

    /**
     * Set failedbillcount
     *
     * @param integer $failedbillcount
     */
    public function setFailedbillcount($failedbillcount)
    {
        $this->failedbillcount = $failedbillcount;
    }

    /**
     * Get failedbillcount
     *
     * @return integer 
     */
    public function getFailedbillcount()
    {
        return $this->failedbillcount;
    }

    /**
     * Set timesbilled
     *
     * @param integer $timesbilled
     */
    public function setTimesbilled($timesbilled)
    {
        $this->timesbilled = $timesbilled;
    }

    /**
     * Get timesbilled
     *
     * @return integer 
     */
    public function getTimesbilled()
    {
        return $this->timesbilled;
    }

    /**
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set preferedpaymentmethod
     *
     * @param integer $preferedpaymentmethod
     */
    public function setPreferedpaymentmethod($preferedpaymentmethod)
    {
        $this->preferedpaymentmethod = $preferedpaymentmethod;
    }

    /**
     * Get preferedpaymentmethod
     *
     * @return integer 
     */
    public function getPreferedpaymentmethod()
    {
        return $this->preferedpaymentmethod;
    }
}