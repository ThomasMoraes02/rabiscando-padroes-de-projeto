<?php 
namespace DesignPatterns\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\Shipping;

class ShippingDefault implements Shipping
{
    public function calculate(float $orderShipping): float
    {
        return $orderShipping * 0.05;
    }
}