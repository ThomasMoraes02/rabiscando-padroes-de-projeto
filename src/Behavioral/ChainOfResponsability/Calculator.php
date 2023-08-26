<?php 
namespace DesignPatterns\Behavioral\ChainOfResponsability;

interface Calculator
{
    public function calculate(Order $order): int;

    public function setNext(Calculator $calculator): void;
}
