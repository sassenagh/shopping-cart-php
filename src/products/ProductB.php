<?php
namespace Shop\Products;

use Shop\Interfaces\ProductInterface;

class ProductB implements ProductInterface
{

    public function getPrice()
    {
        return 8;
    }

    public function getType()
    {
        return 'B';
    }


}