<?php 
namespace DesignPatterns\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\Shipping;

class ShippingExpress implements Shipping
{
    public function calculate(float $orderShipping): float
    {
        return $orderShipping * 0.1;
    }
}