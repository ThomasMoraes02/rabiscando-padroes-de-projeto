<?php 
namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Structural\Decorator\Pizza;

class PizzaFrango extends Pizza
{
    public function __construct()
    {
        $this->description = "Deliciosa Pizza de Frago";
    }

    public function getDescription(): string
    {
        return $this->description;   
    }

    public function getPrice(): float
    {
        return 19;
    }
}