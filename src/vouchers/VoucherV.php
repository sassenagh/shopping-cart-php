<?php
namespace Shop\Vouchers;

use Shop\Interfaces\VoucherInterface;
use Shop\ShoppingCart;

class VoucherV implements VoucherInterface
{
    private $voucherName = 'V';
    private $voucherAmount = 10;
    private $voucherType = "percentage";

    public function getDiscount($cart)
    {
        $count = 0;

        foreach ($cart as $item) {
           if($item->getType() === 'A') $count++;
        }

        $discount = $this->voucherAmount;
        
        if($this->voucherType === "percentage") $discount = $this->voucherAmount/100;


        $totalDiscount = 0;

        $totalDiscount = floor($count/2)*10*$discount;

        return $totalDiscount;
    }

    public function getType()
    {
        return $this->voucherName;
    }


}