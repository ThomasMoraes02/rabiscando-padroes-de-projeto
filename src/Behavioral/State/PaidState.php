<?php 
namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\Order;
use Exception;

class PaidState implements State
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;   
    }

    public function paid(): void
    {
        throw new Exception("Cannot pay a paid order");
    }

    public function cancel(): void
    {
        $this->order->setState($this->order->getCanceled());
    }

    public function dispatch(): void
    {
        $this->order->setState($this->order->getDispatched());
    }
}