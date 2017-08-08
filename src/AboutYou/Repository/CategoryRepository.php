<?php

namespace AboutYou\Repository;

use AboutYou\Entity\Product;

/**
 * Repository CategoryRepository
 */
class CategoryRepository extends AbstractRepository implements CategoryRepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function getProducts($categoryId)
    {
        $products = [];

        $jsonArray = $this->loadData();

        /*
         * Parse jsonArray and return array of Product Entity
         *
         * Note: 
         * RecursiveIteratorIterator could have been used to iterate over jsonArray however i did not use!
         */
        foreach($jsonArray['products'] as $product)
        {
            $productInstance = new Product($product['name'], $product['description']);

            $products[] = $productInstance;
        }

        return $products;
    }
}
