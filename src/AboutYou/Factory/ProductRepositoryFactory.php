<?php

namespace AboutYou\Factory;

use AboutYou\Repository\ProductRepository;
use AboutYou\Repository\OrderedProductRepository;
use AboutYou\Repository\CategoryRepository;

/**
 * Class ProductRepositoryFactory
 */
class ProductRepositoryFactory
{
	/** 
	 * @param string $productRepositoryType
	 *
	 * @return AboutYou\Repository\ProductRepositoryInterface
	 */
	public static function create($productRepositoryType)
	{
		switch ($productRepositoryType)
		{
			case 'unordered':
	   			return new ProductRepository(new CategoryRepository());
			break;

			case 'ordered':
				return new OrderedProductRepository(new CategoryRepository());
			break;		

			default:
			break;
		}
	}
}