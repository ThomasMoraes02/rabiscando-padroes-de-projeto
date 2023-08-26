<?php 
namespace DesignPatterns\Behavioral\ChainOfResponsability;

use DesignPatterns\Behavioral\ChainOfResponsability\Order;
use DesignPatterns\Behavioral\ChainOfResponsability\Calculator;

class NoPoint implements Calculator
{
    private Calculator $next;

    public function calculate(Order $order): int
    {
        return 0;
    }

    public function setNext(Calculator $calculator): void
    {
        
    }
}