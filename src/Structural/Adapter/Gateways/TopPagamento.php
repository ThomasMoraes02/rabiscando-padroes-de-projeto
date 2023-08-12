<?php 
namespace DesignPatterns\Structural\Adapter\Gateways;

class TopPagamento
{
    private float $value;

    private int $installments;

    private string $cardNumber;
    
    private string $cvv;

    public function setTotalValue(float $valor): void
    {
        $this->value = $valor;
    }

    public function setQuantityInstallments(int $parcelas): void
    {
        $this->installments = $parcelas;
    }

    public function setCard(string $numeroCartao, string $cvv): void
    {
        $this->cardNumber = $numeroCartao;
        $this->cvv = $cvv;
    }

    public function charge(): bool
    {
        echo 'Pagamento realizado via TopPagamentos';
        return true;
    }
}