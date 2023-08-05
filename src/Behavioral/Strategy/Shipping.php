<?php 
namespace DesignPatterns\Behavioral\Strategy;

interface Shipping
{
    public function calculate(float $orderShipping): float;
}