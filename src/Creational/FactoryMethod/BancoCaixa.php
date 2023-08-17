<?php

namespace DesignPatterns\Creational\FactoryMethod;

use Exception;
use DesignPatterns\Creational\FactoryMethod\Boleto;
use DesignPatterns\Creational\FactoryMethod\BancoCaixaBoleto10Dias;
use DesignPatterns\Creational\FactoryMethod\BancoCaixaBoleto30Dias;
use DesignPatterns\Creational\FactoryMethod\BancoCaixaBoleto60Dias;

class BancoCaixa
{
    private BoletoSimpleFactory $boletoSimpleFactory;

    public function __construct(BoletoSimpleFactory $boletoSimpleFactory)
    {
        $this->boletoSimpleFactory = $boletoSimpleFactory;
    }

    /**
     * Criar boleto
     *
     * @param integer $vencimentoBoleto
     * @param float $valor
     * @return Boleto
     */
    public function gerarBoleto(int $vencimentoBoleto, float $valor): Boleto
    {
        $boleto = $this->boletoSimpleFactory->criarBoleto($vencimentoBoleto, $valor);
        return $boleto;
    }
}
