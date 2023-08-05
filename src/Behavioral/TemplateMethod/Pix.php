<?php 
namespace DesignPatterns\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\Payment;

class Pix extends Payment
{
    public function calculateDiscount(): float
    {
        return $this->price * 0.1;
    }
}