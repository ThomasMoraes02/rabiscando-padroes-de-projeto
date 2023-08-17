<?php 
namespace DesignPatterns\Structural\Facade;

use DesignPatterns\Structural\Facade\Order;
use DesignPatterns\Structural\Facade\EmailOrder;
use DesignPatterns\Structural\Facade\Payment\Boleto;
use DesignPatterns\Structural\Facade\Payment\CreditCard;
use DesignPatterns\Structural\Facade\Payment\Payment;

class OrderFacade
{
    private Order $order;

    private Payment $payment;
    
    private EmailOrder $emailOrder;

    public function __construct(Costumer $costumer)
    {
        $this->order = new Order($costumer);
        $this->emailOrder = new EmailOrder($this->order);
    }

    public function addProduct(Product $product): self
    {
        $this->order->addProduct($product);
        return $this;
    }

    public function makeCreditCard(): bool
    {
        $this->payment = new CreditCard($this->order);

        if($this->payment->makePayment()) {
            $this->emailOrder->sendMail("Sucesso!");
            return true;
        }
    }

    public function makeBoleto(): bool
    {
        $this->payment = new Boleto($this->order);

        if($this->payment->makePayment()) {
            $this->emailOrder->sendMail("Sucesso!");
            return true;
        }
    }
 
    public function getOrder(): Order
    {
        return $this->order;
    }
}