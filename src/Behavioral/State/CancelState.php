<?php 
namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\Order;
use Exception;

class CancelState implements State
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;   
    }

    public function paid(): void
    {
        throw new Exception("Cannot pay a canceled order");
    }

    public function cancel(): void
    {
        throw new Exception("Cannot cancel a canceled order");
    }

    public function dispatch(): void
    {
        throw new Exception("Cannot dispatch a canceled order");
    }
}