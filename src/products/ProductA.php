<?php
namespace Shop\Products;

use Shop\Interfaces\ProductInterface;

class ProductA implements ProductInterface
{
    
    public function getPrice()
    {
        return 10;
    }

    public function getType()
    {
        return 'A';
    }


}