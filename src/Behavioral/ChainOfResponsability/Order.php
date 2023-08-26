<?php 
namespace DesignPatterns\Behavioral\ChainOfResponsability;

class Order
{
    private float $value;

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }
}