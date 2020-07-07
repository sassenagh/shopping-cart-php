<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Shop\Factories\ProductFactory;
use Shop\Products\ProductA;
use Shop\Products\ProductB;
use Shop\Products\ProductC;

class ProductFactoryTest extends TestCase
{

    public function testShouldCreateProductA()
    {
        $expectedProduct = 'A';

        $factory = new ProductFactory();

        $productA = $factory->createProduct($expectedProduct);
    
        $this->assertInstanceOf(ProductA::class, $productA);
    }

    public function testShouldCreateProductB()
    {
        $expectedProduct = 'B';

        $factory = new ProductFactory();

        $productB = $factory->createProduct($expectedProduct);
    
        $this->assertInstanceOf(ProductB::class, $productB);
    }

    public function testShouldCreateProductC()
    {
        $expectedProduct = 'C';

        $factory = new ProductFactory();

        $productC = $factory->createProduct($expectedProduct);
    
        $this->assertInstanceOf(ProductC::class, $productC);
    }

}
