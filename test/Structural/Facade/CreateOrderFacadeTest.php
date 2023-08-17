<?php 
namespace DesignPatterns\Test\Structural\Facade;

use DesignPatterns\Structural\Facade\Costumer;
use DesignPatterns\Structural\Facade\EmailOrder;
use DesignPatterns\Structural\Facade\Order;
use DesignPatterns\Structural\Facade\OrderFacade;
use DesignPatterns\Structural\Facade\Payment\Boleto;
use DesignPatterns\Structural\Facade\Product;
use PHPUnit\Framework\TestCase;

class CreateOrderFacadeTest extends TestCase
{
    public function test_create_order_without_facade()
    {
        $costumer = new Costumer("Thomas", "thomas@gmail.com");

        $order = new Order($costumer);
        $order
        ->addProduct(new Product("Bike", 10000))
        ->addProduct(new Product("TV", 2599.99))
        ->addProduct(new Product("Notebook", 4500.50));

        $payment = new Boleto($order);
        $email = new EmailOrder($order);

        $this->assertTrue($payment->makePayment());
        $this->assertEquals(17100.49, $order->getValue());
    }

    public function test_create_order_with_facade()
    {
        $costumer = new Costumer("Thomas", "thomas@gmail.com");

        $orderFacade = new OrderFacade($costumer);
        $orderFacade
        ->addProduct(new Product("Bike", 10000))
        ->addProduct(new Product("TV", 2599.99))
        ->addProduct(new Product("Notebook", 4500.50));

        $this->assertTrue($orderFacade->makeCreditCard());
        $this->assertEquals(17100.49, $orderFacade->getOrder()->getValue());
    }
}