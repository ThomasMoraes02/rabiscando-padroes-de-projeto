<?php 
namespace DesignPatterns\Structural\Decorator\decorators;

use DesignPatterns\Structural\Decorator\Pizza;

class BordaRequeijao extends AdicionalDecorator
{
    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDescription(): string
    {
        return $this->pizza->getDescription() . " + Borda Requeijao";
    }

    /**
     * Return Pizza Price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->pizza->getPrice() + 8.50;
    }
}