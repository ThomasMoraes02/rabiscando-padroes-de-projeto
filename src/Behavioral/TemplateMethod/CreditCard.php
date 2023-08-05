<?php 
namespace DesignPatterns\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\Payment;

class CreditCard extends Payment
{
    public function calculateFee(): float
    {
        return $this->price * 0.05;
    }

    public function calculateDiscount(): float
    {
        if($this->price > 300) {
            return $this->price * 0.02;
        }

        return 0;
    }
}