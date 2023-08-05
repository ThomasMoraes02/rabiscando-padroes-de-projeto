<?php 
namespace DesignPatterns\Test\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\CreditCard;
use DesignPatterns\Behavioral\TemplateMethod\DebitCard;
use DesignPatterns\Behavioral\TemplateMethod\Gateway;
use DesignPatterns\Behavioral\TemplateMethod\Pix;
use PHPUnit\Framework\TestCase;

class CalculateChargeWithTemplateMethodTest extends TestCase
{
    public function test_calculate_charge()
    {
        $price = 1000;
        $gateway = new Gateway();

        $creditCard = new CreditCard($price, $gateway);
        $this->assertEquals(1030, $creditCard->createCharge());

        $debitCard = new DebitCard($price, $gateway);
        $this->assertEquals(954, $debitCard->createCharge());

        $pix = new Pix($price, $gateway);
        $this->assertEquals(900, $pix->createCharge());
    }
}