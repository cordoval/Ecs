<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\CrmBundle\Entity\Gateway
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecs\CrmBundle\Entity\GatewayRepository")
 */
class Gateway
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $codeclass
     *
     * @ORM\Column(name="codeclass", type="string", length=255)
     */
    private $codeclass;

    /**
     * @var string $apikey
     *
     * @ORM\Column(name="apikey", type="string", length=255)
     */
    private $apikey;

    /**
     * @var string $apipassword
     *
     * @ORM\Column(name="apipassword", type="string", length=255)
     */
    private $apipassword;


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
     * Set codeclass
     *
     * @param string $codeclass
     */
    public function setCodeclass($codeclass)
    {
        $this->codeclass = $codeclass;
    }

    /**
     * Get codeclass
     *
     * @return string 
     */
    public function getCodeclass()
    {
        return $this->codeclass;
    }

    /**
     * Set apikey
     *
     * @param string $apikey
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;
    }

    /**
     * Get apikey
     *
     * @return string 
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * Set apipassword
     *
     * @param string $apipassword
     */
    public function setApipassword($apipassword)
    {
        $this->apipassword = $apipassword;
    }

    /**
     * Get apipassword
     *
     * @return string 
     */
    public function getApipassword()
    {
        return $this->apipassword;
    }
}