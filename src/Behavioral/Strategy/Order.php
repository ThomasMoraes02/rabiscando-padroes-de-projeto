<?php 
namespace DesignPatterns\Behavioral\Strategy;

class Order
{
    private float $price;

    private Shipping $shipping;

    public function __construct(float $price)
    {
        $this->price = $price;   
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setShipping(Shipping $shipping): void
    {
        $this->shipping = $shipping;
    }

    public function calculate(): float
    {
        return $this->shipping->calculate($this->price);
    }
}