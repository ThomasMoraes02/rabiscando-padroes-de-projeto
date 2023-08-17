<?php 
namespace DesignPatterns\Structural\Facade\Payment;

use DesignPatterns\Structural\Facade\Order;

abstract class Payment
{
    protected Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    abstract public function makePayment(): bool;
}