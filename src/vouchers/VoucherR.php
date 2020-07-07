<?php
namespace Shop\Vouchers;

use Shop\Interfaces\VoucherInterface;
use Shop\ShoppingCart;

class VoucherR implements VoucherInterface
{
    private $voucherName = 'R';
    private $voucherAmount = 5;
    private $voucherType = "amount";

    public function getDiscount($cart)
    {

        $count = 0;

         foreach ($cart as $item) {
            if($item->getType() === 'B') $count++;
         }

         $discount = $this->voucherAmount;
        
         if($this->voucherType === "percentage") $discount = $this->voucherAmount/100;


         $totalDiscount = 0;

         $totalDiscount = $count*$discount;

        return $totalDiscount;
    }

    public function getType()
    {
        return $this->voucherName;
    }



}