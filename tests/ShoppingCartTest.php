<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Shop\Factories\ProductFactory;
use Shop\Factories\VoucherFactory;
use Shop\ShoppingCart;

class ShoppingCartTest extends TestCase
{

    public function testShouldNotApplySDiscount()
    {

        $cart = new ShoppingCart();
        $productFactory = new ProductFactory();
        $voucherFactory = new VoucherFactory();
        $total = 0;
        
        $cart->addProduct($productFactory->createProduct('A'));
        $cart->addProduct($productFactory->createProduct('C'));
        $cart->addVoucher($voucherFactory->createVoucher('S'));
        $cart->addProduct($productFactory->createProduct('A'));
        $cart->addVoucher($voucherFactory->createVoucher('V'));
        $cart->addProduct($productFactory->createProduct('B'));

        $total = $cart->getTotalCart();

        $this->assertEquals(39, $total);

    }

    public function testShouldApplySDiscount()
    {
        $cart = new ShoppingCart();
        $productFactory = new ProductFactory();
        $voucherFactory = new VoucherFactory();
        $total = 0;

        $cart->addProduct($productFactory->createProduct('A'));
        $cart->addVoucher($voucherFactory->createVoucher('S'));
        $cart->addProduct($productFactory->createProduct('A'));
        $cart->addVoucher($voucherFactory->createVoucher('V'));
        $cart->addProduct($productFactory->createProduct('B'));
        $cart->addVoucher($voucherFactory->createVoucher('R'));
        $cart->addProduct($productFactory->createProduct('C'));
        $cart->addProduct($productFactory->createProduct('C'));
        $cart->addProduct($productFactory->createProduct('C'));

        $total = $cart->getTotalCart();

        $this->assertEquals(55.10, $total);
    }

}
