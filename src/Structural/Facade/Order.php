<?php 
namespace DesignPatterns\Structural\Facade;

use DesignPatterns\Structural\Facade\Product;

class Order
{
    private Costumer $costumer;

    /** @var Product[]  */
    private array $products = [];

    private float $value = 0;

    public function __construct(Costumer $costumer)
    {
        $this->costumer = $costumer;
    }
    
    public function setCostumer(Costumer $costumer): void
    {
        $this->costumer = $costumer;
    }

    public function addProduct(Product $product): self
    {
        $this->products[] = $product;
        $this->value += $product->getValue();
        $this->value = round($this->value, 2);
        return $this;
    }

    public function getCostumer(): Costumer
    {
        return $this->costumer;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}