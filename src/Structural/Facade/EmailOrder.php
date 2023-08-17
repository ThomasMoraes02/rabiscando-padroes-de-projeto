<?php 
namespace DesignPatterns\Structural\Facade;

use DesignPatterns\Structural\Facade\Order;

class EmailOrder
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function sendMail(string $message): string
    {
        return "E-mail enviado para {$this->order->getCostumer()->getEmail()}: {$message}";
    }
}