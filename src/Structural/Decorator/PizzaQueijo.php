<?php 
namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Structural\Decorator\Pizza;

class PizzaQueijo extends Pizza
{
    public function __construct()
    {
        $this->description = "Deliciosa Pizza de Queijo";
    }

    public function getDescription(): string
    {
        return $this->description;   
    }

    public function getPrice(): float
    {
        return 22;
    }
}