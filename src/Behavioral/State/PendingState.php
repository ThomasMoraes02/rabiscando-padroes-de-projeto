<?php 
namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\Order;
use Exception;

class PendingState implements State
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;   
    }

    public function paid(): void
    {
        $this->order->setState($this->order->getPaid());
    }

    public function cancel(): void
    {
        $this->order->setState($this->order->getCanceled());
    }

    public function dispatch(): void
    {
        throw new Exception("Cannot dispatch a pending order");
    }
}