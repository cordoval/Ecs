<?php

namespace Ecs\AgentManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\AgentManagerBundle\Entity\UserRole
 */
class UserRole
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $internal_name
     */
    private $internal_name;

    /**
     * @var string $display_name
     */
    private $display_name;

    /**
     * @var string $description
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

	public function __toString()
	{
		return $this->getDisplayName();
	}

    /**
     * Set internal_name
     *
     * @param string $internalName
     * @return UserRole
     */
    public function setInternalName($internalName)
    {
        $this->internal_name = $internalName;
        return $this;
    }

    /**
     * Get internal_name
     *
     * @return string 
     */
    public function getInternalName()
    {
        return $this->internal_name;
    }

    /**
     * Set display_name
     *
     * @param string $displayName
     * @return UserRole
     */
    public function setDisplayName($displayName)
    {
        $this->display_name = $displayName;
        return $this;
    }

    /**
     * Get display_name
     *
     * @return string 
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return UserRole
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
}