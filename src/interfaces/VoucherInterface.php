<?php
namespace Shop\Interfaces;

use Shop\ShoppingCart;

interface VoucherInterface {

    public function getDiscount(ShoppingCart $cart);

    public function getType();

}