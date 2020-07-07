<?php
namespace Shop\Factories;

use Shop\Interfaces\VoucherFactoryInterface;
use Exception;
use Shop\Vouchers\VoucherV;
use Shop\Vouchers\VoucherR;
use Shop\Vouchers\VoucherS;

class VoucherFactory implements VoucherFactoryInterface {
    const VOUCHER_V = 'V';
    const VOUCHER_R = 'R';
    const VOUCHER_S = 'S';
 
    public function createVoucher(string $voucherName)
    {
        switch ($voucherName) {
            case self::VOUCHER_V:
                return new VoucherV();

            case self::VOUCHER_R:
                return new VoucherR();

            case self::VOUCHER_S:
                return new VoucherS();

            default:
                throw new Exception("The voucher you requested doesn't exist");
        }

    }
}