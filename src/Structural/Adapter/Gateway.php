<?php 
namespace DesignPatterns\Structural\Adapter;

interface Gateway
{
    public function setValue(float $value): void;

    public function setInstallments(int $installments): void;

    public function setCardNumber(string $cardNumber): void;

    public function setCvv(string $cvv): void;

    public function checkCard(): bool;

    public function charge(): bool;
}