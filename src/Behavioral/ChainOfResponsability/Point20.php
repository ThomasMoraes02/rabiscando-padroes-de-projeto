<?php 
namespace DesignPatterns\Behavioral\ChainOfResponsability;

use DesignPatterns\Behavioral\ChainOfResponsability\Order;
use DesignPatterns\Behavioral\ChainOfResponsability\Calculator;

class Point20 implements Calculator
{
    private Calculator $next;

    public function calculate(Order $order): int
    {
        if($order->getValue() >= 20) {
            return intdiv($order->getValue(), 10);
        }

        return $this->next->calculate($order);
    }

    public function setNext(Calculator $calculator): void
    {
        $this->next = $calculator;
    }
}