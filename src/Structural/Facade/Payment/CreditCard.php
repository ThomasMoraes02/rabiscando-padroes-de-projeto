<?php 
namespace DesignPatterns\Structural\Facade\Payment;

class CreditCard extends Payment
{
    public function makePayment(): bool
    {
        if($this->order->getValue() > 0) {
            return true;
        }

        return false;
    }
}