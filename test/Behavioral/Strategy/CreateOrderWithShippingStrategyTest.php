<?php 
namespace DesignPatterns\Test\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\Order;
use DesignPatterns\Behavioral\Strategy\ShippingDefault;
use DesignPatterns\Behavioral\Strategy\ShippingExpress;
use PHPUnit\Framework\TestCase;

class CreateOrderWithShippingStrategyTest extends TestCase
{
    public function test_create_order_with_shipping_strategy()
    {
        $order = new Order(100);

        $shippingDefault = new ShippingDefault();
        $shippingExpress = new ShippingExpress();

        $order->setShipping($shippingExpress);
        
        $this->assertEquals(10, $order->calculate());
    }
}
