<?php

namespace AboutYou\Repository;

/**
 * Interface CategoryRepositoryInterface
 */
interface CategoryRepositoryInterface extends RepositoryInterface
{
    /**
     * This method should read from a data source (JSON in our case)
     * and return an unsorted list of products found in the data source.
     * 
     * @param integer $categoryId
     *
     * @return \AboutYou\Entity\Product[]
     */
    public function getProducts($categoryId);
}
