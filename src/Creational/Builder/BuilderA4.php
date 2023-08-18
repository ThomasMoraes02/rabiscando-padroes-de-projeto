<?php
namespace DesignPatterns\Creational\Builder;

class BuilderA4 implements BuilderInterfaceGeradorPDF
{
    private GeradorPDF $geradorPDF;

    public function __construct()
    {
        $this->geradorPDF = new GeradorPDF();
    }

    public function getGeradorPDF(): GeradorPDF
    {
        return $this->geradorPDF;
    }

    public function setHeader(): void
    {
        $this->geradorPDF->setHasHeader(true);
        $this->geradorPDF->setHeaderHeigh(15);
    }

    public function setPageConfiguration(): void
    {
        $this->geradorPDF->setPageOrientation('portrait');
        $this->geradorPDF->setUnit('mm');
        $this->geradorPDF->setPageSizeX(210);
        $this->geradorPDF->setPageSizeY(297);
        $this->geradorPDF->setPageColor("#ffffff");
        $this->geradorPDF->setEncode("UTF-8");
    }

    public function setMargin(): void
    {
        $this->geradorPDF->setMarginTop(30);
        $this->geradorPDF->setMarginRight(20);
        $this->geradorPDF->setMarginBottom(30);
        $this->geradorPDF->setMarginLeft(20);
    }

    public function setFooter(): void
    {
        $this->geradorPDF->setHasFooter(true);
        $this->geradorPDF->setFooterHeigh(15);
    }
}