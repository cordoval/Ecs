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


}