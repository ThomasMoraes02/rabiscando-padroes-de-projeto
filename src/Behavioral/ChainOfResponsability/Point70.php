<?php 
namespace DesignPatterns\Behavioral\ChainOfResponsability;

use DesignPatterns\Behavioral\ChainOfResponsability\Order;
use DesignPatterns\Behavioral\ChainOfResponsability\Calculator;

class Point70 implements Calculator
{
    private Calculator $next;

    public function calculate(Order $order): int
    {
        if($order->getValue() >= 70) {
            return intdiv($order->getValue(), 5);
        }

        return $this->next->calculate($order);
    }

    public function setNext(Calculator $calculator): void
    {
        $this->next = $calculator;
    }
}