<?php 
namespace DesignPatterns\Structural\Decorator\decorators;

use DesignPatterns\Structural\Decorator\Pizza;

abstract class AdicionalDecorator extends Pizza
{
    protected Pizza $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    abstract public function getDescription(): string;

    abstract public function getPrice(): float;
}