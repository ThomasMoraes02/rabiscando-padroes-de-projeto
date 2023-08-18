<?php 
namespace DesignPatterns\Test\Creational\Builder;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Builder\BuilderA4;
use DesignPatterns\Creational\Builder\GeradorPDF;

class CreatePDFTest extends TestCase
{
    public function test_create_pdf()
    {
        $builderA4 = new BuilderA4();
        $pdf = $builderA4->getGeradorPDF();

        $this->assertInstanceOf(GeradorPDF::class, $pdf);
    }
}