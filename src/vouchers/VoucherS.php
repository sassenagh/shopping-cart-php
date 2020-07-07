<?php
namespace Shop\Vouchers;

use Shop\Interfaces\VoucherInterface;
use Shop\ShoppingCart;

class VoucherS implements VoucherInterface
{
    private $voucherName = 'S';
    private $voucherAmount = 5;
    private $voucherType = "percentage";

    public function getDiscount($total)
    {
        $discount = $this->voucherAmount;
        
        if($this->voucherType === "percentage") $discount = $this->voucherAmount/100;

        $totalDiscount = $total*$discount;

        return $totalDiscount;
    }

    public function getType()
    {
        return $this->voucherName;
    }


}