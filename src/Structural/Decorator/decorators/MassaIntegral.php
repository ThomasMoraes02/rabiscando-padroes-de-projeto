<?php 
namespace DesignPatterns\Structural\Decorator\decorators;

use DesignPatterns\Structural\Decorator\Pizza;

class MassaIntegral extends AdicionalDecorator
{
    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDescription(): string
    {
        return $this->pizza->getDescription() . " + Massa Integral";
    }

    /**
     * Return Pizza Price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->pizza->getPrice() + 5;
    }
}