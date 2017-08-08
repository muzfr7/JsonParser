<?php

namespace AboutYou\Validation;

use AboutYou\Entity\Variant;

/**
 * Validator Class for Variant Entity
 */
class VariantValidator extends AbstractValidator
{
    /**
	 * Validates Variant Entity's Properties
	 *
	 * Note:
	 * As you were not explicit about it's validation, I'm just validating their types
	 * 
	 * @param Variant $variant
	 * 
	 * @return $boolean
	 */
	public static function validate($variant)
	{
		if ($variant instanceof Variant)
		{
			$isPassed = false;
			
			$isPassed = is_bool($variant->getIsDefault()) 	? true : false;
			$isPassed = is_bool($variant->getIsAvailable()) ? true : false;
			$isPassed = is_int($variant->getQuantity()) 	? true : false;
			$isPassed = is_string($variant->getSize()) 		? true : false;

			return $isPassed;
		}
		
		return false;
	}
}