<?php 
namespace DesignPatterns\Structural\Decorator;

abstract class Pizza
{
    protected string $description = 'Descrição não definida';
    
    protected float $price;

    abstract public function getDescription(): string;

    abstract public function getPrice(): float;
}