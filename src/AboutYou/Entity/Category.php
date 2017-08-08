<?php

namespace AboutYou\Entity;

/**
 * Category Entity
 *
 * Hierarchy Order 1
 */
class Category extends AbstractEntity
{
    /**
     * Category Name
     *
     * @var string
     */
    protected $name;

    /**
     * List of Products that belong to a Category.
     *
     * @var \AboutYou\Entity\Product[]
     */
    protected $products = [];

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
