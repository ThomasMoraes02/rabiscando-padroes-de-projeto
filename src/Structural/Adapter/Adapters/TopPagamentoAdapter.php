<?php 
namespace DesignPatterns\Structural\Adapter\Adapters;

use DesignPatterns\Structural\Adapter\Gateway;
use DesignPatterns\Structural\Adapter\Gateways\TopPagamento;

class TopPagamentoAdapter implements Gateway
{
    private TopPagamento $topPagamento;

    private ?string $cardNumber = null;

    private ?string $cvv = null;

    public function __construct(TopPagamento $topPagamento)
    {
        $this->topPagamento = $topPagamento;
    }

    public function setValue(float $value): void
    {
        $this->topPagamento->setTotalValue($value);
    }

    public function setInstallments(int $installments): void
    {
        $this->topPagamento->setQuantityInstallments($installments);
    }

    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;

        if(!is_null($this->cvv)) {
            $this->topPagamento->setCard($this->cardNumber, $this->cvv);
        }
    }

    public function setCvv(string $cvv): void
    {
        $this->cvv = $cvv;

        if(!is_null($this->cardNumber)) {
            $this->topPagamento->setCard($this->cardNumber, $this->cvv);
        }
    }

    public function checkCard(): bool
    {
        return true;
    }

    public function charge(): bool
    {
        return $this->topPagamento->charge();
    }
}