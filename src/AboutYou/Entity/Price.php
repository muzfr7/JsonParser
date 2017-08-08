<?php

namespace AboutYou\Entity;

/**
 * Price Entity
 *
 * Hierarchy Order 4
 */
class Price
{
    /**
     * Current price.
     *
     * @var decimal
     */
    protected $current;

    /**
     * Old price.
     *
     * @var decimal|null
     */
    protected $old;

    /**
     * Defines if the price is sale.
     *
     * @var bool
     */
    protected $isSale;

    /**
     * Variant that the price belongs to.
     *
     * @var \AboutYou\Entity\Variant
     */
    protected $variant;


    /**
     * @return decimal
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param decimal $current
     * 
     * @return $this
     */
    public function setCurrent($current)
    {
        $this->current = $current;
        return $this;
    }
}
