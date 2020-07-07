<?php
namespace Shop\Factories;

use Shop\Interfaces\ProductFactoryInterface;
use Exception;
use Shop\Products\ProductA;
use Shop\Products\ProductB;
use Shop\Products\ProductC;

class ProductFactory implements ProductFactoryInterface {
    const PRODUCT_A = 'A';
    const PRODUCT_B = 'B';
    const PRODUCT_C = 'C';
 
    public function createProduct(string $productName)
    {
        switch ($productName) {
            case self::PRODUCT_A:
                return new ProductA();

            case self::PRODUCT_B:
                return new ProductB();

            case self::PRODUCT_C:
                return new ProductC();

            default:
                throw new Exception("The product you requested doesn't exist");
        }

    }
}