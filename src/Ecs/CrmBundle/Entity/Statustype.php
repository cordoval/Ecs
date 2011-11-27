<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\CrmBundle\Entity\Statustype
 *
 * @ORM\Table(name="statustype")
 * @ORM\Entity
 */
class Statustype
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
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="Statustype")
     */
    private $customers;
    
    public function __construct()
    {
        $this->people = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Add customers
     *
     * @param Ecs\CrmBundle\Entity\Customer $customers
     */
    public function addCustomer(\Ecs\CrmBundle\Entity\Customer $customers)
    {
        $this->customers[] = $customers;
    }

    /**
     * Get customers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCustomers()
    {
        return $this->customers;
    }
}