<?php

namespace Ecs\AgentManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecs\AgentManagerBundle\Entity\JobTitle
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class JobTitle
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
     * @var string $position_name
     *
     * @ORM\Column(name="position_name", type="string", length=255)
     */
    private $position_name;

    /**
     * @var string $default_roles
     *
     * @ORM\Column(name="default_roles", type="string", length=255)
     */
    private $default_roles;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


}