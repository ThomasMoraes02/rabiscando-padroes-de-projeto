<?php 
namespace DesignPatterns\Behavioral\ChainOfResponsability;

use DesignPatterns\Behavioral\ChainOfResponsability\Order;
use DesignPatterns\Behavioral\ChainOfResponsability\Point20;
use DesignPatterns\Behavioral\ChainOfResponsability\Point40;
use DesignPatterns\Behavioral\ChainOfResponsability\Point70;

class PointsCalculator
{
    public function calculate(Order $order, int $day): int
    {
        // if($order->getValue() >= 70) {
        //     $points = intdiv($order->getValue(), 5);
        // } elseif($order->getValue() >= 40) {
        //     $points = intdiv($order->getValue(), 7);
        // } elseif($order->getValue() >= 20) {
        //     $points = intdiv($order->getValue(), 10);
        // } else {
        //     return 0;
        // }

        $point70 = new Point70();
        $point40 = new Point40();
        $point20 = new Point20();
        $noPoint = new NoPoint();

        $point70->setNext($point40);
        $point40->setNext($point20);
        $point20->setNext($noPoint);

        if($day >= 16 && $day <= 31) {
            return $point70->calculate($order) * 2;
        }

        return $point70->calculate($order);
    }
}