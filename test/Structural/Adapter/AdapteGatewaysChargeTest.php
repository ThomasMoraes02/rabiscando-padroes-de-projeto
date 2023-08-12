<?php 
namespace DesignPatterns\Test\Structural\Adapter;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Adapter\Charge;
use DesignPatterns\Structural\Adapter\Gateways\TopPagamento;
use DesignPatterns\Structural\Adapter\Adapters\PagFacilAdapter;
use DesignPatterns\Structural\Adapter\Adapters\TopPagamentoAdapter;

class AdapteGatewaysChargeTest extends TestCase
{
    public function test_charge_default_with_pag_facil_and_top_pagamento()
    {
        $pagFacil = new PagFacilAdapter();

        $topPagamento = new TopPagamentoAdapter(new TopPagamento());

        $charge = new Charge($pagFacil);
        $charge->setValue(100);
        $charge->setInstallments(3);
        $charge->setCardNumber('1234567890123456');
        $charge->setCvv('123');

        $this->assertTrue($charge->charge());

        $charge->setGateway($topPagamento);

        $this->assertTrue($charge->charge());
    }
}