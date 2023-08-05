<?php 
namespace DesignPatterns\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\Gateway;

abstract class Payment
{
    protected float $price;

    protected Gateway $gateway;

    public function __construct(float $price, Gateway $gateway)
    {
        $this->price = $price;
        $this->gateway = $gateway;
    }

    /**
     * Método Hook (implementação vazia)
     *
     * @return float
     */
    public function calculateFee(): float
    {
        return 0;
    }

    abstract public function calculateDiscount(): float;

    /**
     * Template Method
     *
     * @return float
     */
    public function createCharge(): float
    {
        $price = $this->price + $this->calculateFee() - $this->calculateDiscount();

        return $this->gateway->charge($price);
    }
}