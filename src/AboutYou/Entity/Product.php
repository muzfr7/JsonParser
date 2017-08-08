<?php

namespace AboutYou\Entity;

/**
 * Product Entity
 *
 * Hierarchy Order 2
 */
class Product extends AbstractEntity
{
    /**
     * Name of the Product.
     *
     * @var string
     */
    protected $name;

    /**
     * Description of the Product.
     * 
     * @var string
     */
    protected $description;

    /**
     * Unsorted list of Variants with their corresponding prices.
     * 
     * @var \AboutYou\Entity\Variant[]
     */
    protected $variants = [];

    /**
     * @param string $pName
     * @param string $pDescription
     */
     public function __construct($pName, $pDescription)
     {
        $this->name         = $pName;
        $this->description  = $pDescription;
     }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add Variants for this product
     *
     * @param \AboutYou\Entity\Variant $variant
     */
    public function addVariants($variant)
    {
        $this->variants[] = $variant;
    }
}
