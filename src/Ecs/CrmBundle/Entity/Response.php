<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\CrmBundle\Entity\Response
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecs\CrmBundle\Entity\ResponseRepository")
 */
class Response
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
     * @var integer $transaction
     *
     * @ORM\Column(name="transaction", type="integer")
     */
    private $transaction;

    /**
     * @var integer $responsecode
     *
     * @ORM\Column(name="responsecode", type="integer")
     */
    private $responsecode;

    /**
     * @var integer $responsecodedetail
     *
     * @ORM\Column(name="responsecodedetail", type="integer")
     */
    private $responsecodedetail;

    /**
     * @var string $responsemessage
     *
     * @ORM\Column(name="responsemessage", type="string", length=255)
     */
    private $responsemessage;

    /**
     * @var text $returnstring
     *
     * @ORM\Column(name="returnstring", type="text")
     */
    private $returnstring;


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
     * Set transaction
     *
     * @param integer $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Get transaction
     *
     * @return integer 
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set responsecode
     *
     * @param integer $responsecode
     */
    public function setResponsecode($responsecode)
    {
        $this->responsecode = $responsecode;
    }

    /**
     * Get responsecode
     *
     * @return integer 
     */
    public function getResponsecode()
    {
        return $this->responsecode;
    }

    /**
     * Set responsecodedetail
     *
     * @param integer $responsecodedetail
     */
    public function setResponsecodedetail($responsecodedetail)
    {
        $this->responsecodedetail = $responsecodedetail;
    }

    /**
     * Get responsecodedetail
     *
     * @return integer 
     */
    public function getResponsecodedetail()
    {
        return $this->responsecodedetail;
    }

    /**
     * Set responsemessage
     *
     * @param string $responsemessage
     */
    public function setResponsemessage($responsemessage)
    {
        $this->responsemessage = $responsemessage;
    }

    /**
     * Get responsemessage
     *
     * @return string 
     */
    public function getResponsemessage()
    {
        return $this->responsemessage;
    }

    /**
     * Set returnstring
     *
     * @param text $returnstring
     */
    public function setReturnstring($returnstring)
    {
        $this->returnstring = $returnstring;
    }

    /**
     * Get returnstring
     *
     * @return text 
     */
    public function getReturnstring()
    {
        return $this->returnstring;
    }
}