<?php 
namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Structural\Decorator\Pizza;

class PizzaCalabresa extends Pizza
{
    public function __construct()
    {
        $this->description = "Deliciosa Pizza de Calabresa";
    }

    public function getDescription(): string
    {
        return $this->description;   
    }

    public function getPrice(): float
    {
        return 25;
    }
}