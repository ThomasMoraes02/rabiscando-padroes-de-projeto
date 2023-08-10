<?php 
namespace DesignPatterns\Test\Behavioral\State;

use DesignPatterns\Behavioral\State\Order;
use DesignPatterns\Behavioral\State\PaidState;
use Exception;
use PHPUnit\Framework\TestCase;

class UpdateStateOrderTest extends TestCase
{
    private Order $order;

    protected function setUp(): void
    {
        $this->order = new Order();
    }

    public function test_pay_order()
    {
        $this->order->paid();
        $this->assertInstanceOf(PaidState::class, $this->order->getCurrentState());
    }

    public function test_pay_order_paid()
    {
        $this->expectException(Exception::class);

        $this->order->paid();
        $this->order->paid();
    }

    public function test_dispatch_canceled_order()
    {
        $this->expectException(Exception::class);

        $this->order->paid();
        $this->order->cancel();
        $this->order->dispatch();
    }
}