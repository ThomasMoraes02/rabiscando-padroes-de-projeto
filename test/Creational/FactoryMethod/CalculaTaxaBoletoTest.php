<?php 
namespace DesignPatterns\Test\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\BancoCaixa;
use DesignPatterns\Creational\FactoryMethod\BoletoSimpleFactory;
use PHPUnit\Framework\TestCase;

class CalculaTaxaBoletoTest extends TestCase
{
    public function test_calcula_taxa_boleto()
    {
        $banco = new BancoCaixa(new BoletoSimpleFactory());

        $boleto10dias = $banco->gerarBoleto(10, 100);

        $this->assertEquals(2.0, $boleto10dias->calcularJuros());
        $this->assertEquals(10.0, $boleto10dias->calcularDesconto());
        $this->assertEquals(5.0, $boleto10dias->calcularMulta());
    }
}