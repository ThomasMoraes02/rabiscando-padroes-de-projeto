<?php 
namespace DesignPatterns\Structural\Facade\Payment;

class Boleto extends Payment
{
    public function makePayment(): bool
    {
        if($this->order->getValue() > 0) {
            return true;
        }
        return false;
    }
}