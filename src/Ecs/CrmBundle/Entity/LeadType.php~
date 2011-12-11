<?php

namespace Ecs\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\CrmBundle\Entity\LeadType
 */
class LeadType
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $type_name
     */
    private $type_name;

    /**
     * @var text $description
     */
    private $description;


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
     * Set type_name
     *
     * @param string $typeName
     * @return LeadType
     */
    public function setTypeName($typeName)
    {
        $this->type_name = $typeName;
        return $this;
    }

    /**
     * Get type_name
     *
     * @return string 
     */
    public function getTypeName()
    {
        return $this->type_name;
    }

    /**
     * Set description
     *
     * @param text $description
     * @return LeadType
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }
}