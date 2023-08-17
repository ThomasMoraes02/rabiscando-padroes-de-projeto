<?php 
namespace DesignPatterns\Structural\Facade;

class Product
{
    private string $name;

    private float $value;

    public function __construct(string $name, float $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}