<?php 
namespace DesignPatterns\Behavioral\TemplateMethod;

class Gateway
{
    public function charge(float $value): float
    {
        return $value;
    }
}