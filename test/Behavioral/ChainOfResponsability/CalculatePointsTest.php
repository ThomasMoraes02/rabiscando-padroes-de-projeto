<?php 
namespace DesignPatterns\Test\Behavioral\ChainOfResponsability;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\ChainOfResponsability\Order;
use DesignPatterns\Behavioral\ChainOfResponsability\PointsCalculator;

class CalculatePointsTest extends TestCase
{
    public function test_calculate_points()
    {
        $order = new Order();
        $calculator = new PointsCalculator();

        $order->setValue(21);

        $day15 = $calculator->calculate($order, 15);
        $day16 = $calculator->calculate($order, 16);

        $this->assertEquals(2, $day15);
        $this->assertEquals(4, $day16);

        $order->setValue(100);

        $day15 = $calculator->calculate($order, 15);
        $day16 = $calculator->calculate($order, 16);

        $this->assertEquals(20, $day15);
        $this->assertEquals(40, $day16);
    }
}