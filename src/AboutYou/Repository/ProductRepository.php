<?php

namespace AboutYou\Repository;

use AboutYou\Entity\Product;

/**
 * Repository ProductRepository
 */
class ProductRepository extends AbstractRepository implements ProductRepositoryInterface
{
	/**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepository;

	/**
     * Maps from category name to the id for the category service.
     *
     * Note:
     * This could be moved in 1st level abstract class
     *  
     * @var array
     */
    private $categoryNameToIdMapping = ['Clothes' => 17325];

    /**
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct($categoryRepository)
    {
       $this->categoryRepository = $categoryRepository;
    }

    /**
     * @inheritdoc
     */
    public function getProductsForCategory($categoryName)
    {
    	if (!isset($this->categoryNameToIdMapping[$categoryName]))
        {
            throw new \InvalidArgumentException(sprintf('Given category name [%s] is not mapped.', $categoryName));
        }

        $categoryId = $this->categoryNameToIdMapping[$categoryName];

        $productResults = $this->categoryRepository->getProducts($categoryId);

        return $productResults;
    }
}