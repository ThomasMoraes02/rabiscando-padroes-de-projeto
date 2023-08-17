<?php 
namespace DesignPatterns\Creational\FactoryMethod;

use Exception;

class BoletoSimpleFactory
{
    /**
     * Gera Boleto
     *
     * @param integer $vencimento
     * @param float $valor
     * @return Boleto
     */
    public function criarBoleto(int $vencimento, float $valor): Boleto
    {
        switch ($vencimento) {
            case 10:
                $boleto = new BancoCaixaBoleto10Dias($valor);
                break;
            case 30:
                $boleto = new BancoCaixaBoleto30Dias($valor);
                break;
            case 60:
                $boleto = new BancoCaixaBoleto60Dias($valor);
                break;
            default:
                throw new Exception('Vencimento Indisponível');
        }

        return $boleto;
    }
}