<?php
namespace Shop;

use Shop\Factories\ProductFactory;
use Shop\Factories\VoucherFactory;

class ShoppingCart
{

    public function __construct()
    {
        $this->cart = [];
        $this->voucher = [];
        $this->vouherFactory = new VoucherFactory();

    }

    /**
	 * Add products in cart.
	 *
	 * @return array
	 */
    public function addProduct($product)
    {
        $this->cart[] = $product;
        return $this->cart;
    }

    /**
	 * Add vouchers in cart.
	 *
	 * @return array
	 */
    public function addVoucher($voucher)
    {
        $this->voucher[] = $voucher;
        return $this->voucher;
    }


    private function setVoucherS($total) 
    {
        if($total > 40){
            $total -= $this->vouherFactory->createVoucher('S')->getDiscount($total);
        }
        
        return $total;
    }

    /**
	 * Get the total of price in cart.
	 *
	 * @return float
	 */
	public function getTotalCart()
	{
        $total = 0;
        $discount = 0;
        $voucherS = false;

        foreach ($this->cart as $item) {
            $total += $item->getPrice();
        }

        foreach ($this->voucher as $item) {
            if($item->getType() !== 'S'){
                $total -= $item->getDiscount($this->cart);
            } else {
                $voucherS = true;
            }
        }

        if($voucherS){
            $total = $this->setVoucherS($total);
        }
     
		return $total;
    }
    

}