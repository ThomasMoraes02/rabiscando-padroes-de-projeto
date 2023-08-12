<?php 
namespace DesignPatterns\Structural\Adapter\Gateways;

class PagFacil
{
    private float $value;

    private int $installments;

    private string $cardNumber;
    
    private string $cvv;

    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    public function setInstallments(int $installments): void
    {
        $this->installments = $installments;
    }

    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    public function setCvv(string $cvv): void
    {
        $this->cvv = $cvv;
    }

    public function checkCard(): bool
    {
        if ($this->cardNumber != "" && $this->cvv != "" && strlen($this->cvv ) == 3) {
            return true;
        }

        return false;
    }

    public function charge(): bool
    {
        return true;
    }
}