<?php

namespace AboutYou\Entity;

/**
 * Variant Entity
 *
 * Hierarchy Order 3
 */
class Variant extends AbstractEntity
{
    /**
     * Defines if the Variant is default for the product.
     *
     * @var bool
     */
    protected $isDefault;

    /**
     * Defines if the Variant is Available or not.
     * 
     * @var bool
     */
    protected $isAvailable;

    /**
     * Number of available items in stock.
     *
     * @var int
     */
    protected $quantity;

    /**
     * Size of the Variant.
     *
     * @var string
     */
    protected $size;

    /**
     * Variant price.
     * 
     * @var \AboutYou\Entity\Price
     */
    protected $price;

    /**
     * Product that the Variant belongs to.
     *
     * @var \AboutYou\Entity\Product
     */
    protected $product;


    /**
     * @param bool $vIsDefault
     * @param bool $vIsAvailable
     * @param int $vQuantity
     * @param string $vSize
     */
     public function __construct($vIsDefault, $vIsAvailable, $vQuantity, $vSize)
     {
        $this->isDefault    = $vIsDefault;
        $this->isAvailable  = $vIsAvailable;
        $this->quantity     = $vQuantity;
        $this->size         = $vSize;
     }

    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @return bool
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }
    
    /**
     * @return \AboutYou\Entity\Price
     */
    public function getPrice()
    {
        return $this->price;
    }
}
