<?php
namespace Shop\Products;

use Shop\Interfaces\ProductInterface;

class ProductC implements ProductInterface
{
    
    public function getPrice()
    {
        return 12;
    }

    public function getType()
    {
        return 'C';
    }

}