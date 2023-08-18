<?php 
namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\GeradorPDF;

interface BuilderInterfaceGeradorPDF
{
    public function getGeradorPDF(): GeradorPDF;

    public function setPageConfiguration(): void;

    public function setHeader(): void;

    public function setMargin(): void;

    public function setFooter(): void;
}