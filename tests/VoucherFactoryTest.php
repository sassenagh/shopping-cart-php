<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Shop\Factories\VoucherFactory;
use Shop\Vouchers\VoucherV;
use Shop\Vouchers\VoucherR;
use Shop\Vouchers\VoucherS;

class VoucherFactoryTest extends TestCase
{

    public function testShouldCreateVoucherV()
    {
        $expectedVoucher = 'V';

        $factory = new VoucherFactory();

        $voucherV = $factory->createVoucher($expectedVoucher);
    
        $this->assertInstanceOf(VoucherV::class, $voucherV);
    }

    public function testShouldCreateVoucherR()
    {
        $expectedVoucher = 'R';

        $factory = new VoucherFactory();

        $voucherR = $factory->createVoucher($expectedVoucher);
    
        $this->assertInstanceOf(VoucherR::class, $voucherR);
    }


    public function testShouldCreateVoucherS()
    {
        $expectedVoucher = 'S';

        $factory = new VoucherFactory();

        $voucherS = $factory->createVoucher($expectedVoucher);
    
        $this->assertInstanceOf(VoucherS::class, $voucherS);
    }



}
