<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\CrmBundle\Entity\Transaction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecs\CrmBundle\Entity\TransactionRepository")
 */
class Transaction
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
     * @var integer $purchase
     *
     * @ORM\Column(name="purchase", type="integer")
     */
    private $purchase;

    /**
     * @var integer $product
     *
     * @ORM\Column(name="product", type="integer")
     */
    private $product;

    /**
     * @var integer $customer
     *
     * @ORM\Column(name="customer", type="integer")
     */
    private $customer;

    /**
     * @var integer $gateway
     *
     * @ORM\Column(name="gateway", type="integer")
     */
    private $gateway;

    /**
     * @var integer $paymentmethod
     *
     * @ORM\Column(name="paymentmethod", type="integer")
     */
    private $paymentmethod;    
    
    /**
     * @var datetime $transaction_date
     *
     * @ORM\Column(name="transaction_date", type="datetime")
     */
    private $transaction_date;

    /**
     * @var decimal $amount
     *
     * @ORM\Column(name="amount", type="decimal")
     */
    private $amount;

    /**
     * @var boolean $success
     *
     * @ORM\Column(name="success", type="boolean")
     */
    private $success;

    /**
     * @var integer $response
     *
     * @ORM\Column(name="response", type="integer")
     */
    private $response;

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
     * Set purchase
     *
     * @param integer $purchase
     */
    public function setPurchase($purchase)
    {
        $this->purchase = $purchase;
    }

    /**
     * Get purchase
     *
     * @return integer 
     */
    public function getPurchase()
    {
        return $this->purchase;
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
     * Set customer
     *
     * @param integer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get customer
     *
     * @return integer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set gateway
     *
     * @param integer $gateway
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * Get gateway
     *
     * @return integer 
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set transaction_date
     *
     * @param datetime $transactionDate
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transaction_date = $transactionDate;
    }

    /**
     * Get transaction_date
     *
     * @return datetime 
     */
    public function getTransactionDate()
    {
        return $this->transaction_date;
    }

    /**
     * Set paymentmethod
     *
     * @param integer $paymentmethod
     */
    public function setPaymentmethod($paymentmethod)
    {
        $this->paymentmethod = $paymentmethod;
    }

    /**
     * Get paymentmethod
     *
     * @return integer 
     */
    public function getPaymentmethod()
    {
        return $this->paymentmethod;
    }

    /**
     * Set amount
     *
     * @param decimal $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get amount
     *
     * @return decimal 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set success
     *
     * @param boolean $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * Get success
     *
     * @return boolean 
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Set response
     *
     * @param integer $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * Get response
     *
     * @return integer 
     */
    public function getResponse()
    {
        return $this->response;
    }
}