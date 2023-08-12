<?php 
namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Gateway;

class Charge
{
    private Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function setGateway(Gateway $gateway): void
    {
        $this->gateway = $gateway;
    }

    public function setValue(float $value): void
    {
        $this->gateway->setValue($value);
    }

    public function setInstallments(int $installments): void
    {
        $this->gateway->setInstallments($installments);
    }

    public function setCardNumber(string $cardNumber): void
    {
        $this->gateway->setCardNumber($cardNumber);
    }

    public function setCvv(string $cvv): void
    {
        $this->gateway->setCvv($cvv);
    }

    public function charge(): bool
    {
        if($this->gateway->checkCard()) {
            return $this->gateway->charge();
        }

        return false;
    }
}