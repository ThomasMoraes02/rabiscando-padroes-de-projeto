<?php 
namespace DesignPatterns\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\Payment;

class DebitCard extends Payment
{
    public function calculateFee(): float
    {
        return 4;
    }

    public function calculateDiscount(): float
    {
        return $this->price * 0.05;
    }
}