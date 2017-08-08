<?php

namespace AboutYou\Repository;

use AboutYou\Entity\Variant;
use AboutYou\Validation\VariantValidator;

/**
 * Repository VariantRepository
 */
class VariantRepository extends AbstractRepository implements VariantRepositoryInterface
{
    /**
     * Get Variants by Product name.
     *
     * @param string $productName
     *
     * @return Variant[]
     *
     * @throws Exception if variant validation fails.
     */
    public function getVariantsByProductName($productName)
    {
        $variants = [];

        $jsonArray = $this->loadData();

        /*
         * Parse jsonArray and return array of Product Entity
         *
         * Note: 
         * RecursiveIteratorIterator could have been used to iterate over jsonArray however i did not use!
         */
        foreach($jsonArray['products'] as $product)
        {
            if ($product['name'] == $productName)
            {
                /*
                 * Iterating over variants of matched product
                 */
            	foreach($product['variants'] as $variant)
	            {
	            	$variantInstance = new Variant($variant['isDefault'], $variant['isAvailable'], $variant['quantity'], $variant['size']);

	                /*
	                 * Valid variants only
	                 */
	                if (VariantValidator::validate($variantInstance))
	                {
	                	$variants[] = $variantInstance;
	                }else{
                        // I may log this this exception in production env rather than throwing it.
                        throw new \Exception(sprintf('Invalid Variant, please check if variant is formed correctly!'));
                    }
	            }
            }
        }

        return $variants;
    }
}