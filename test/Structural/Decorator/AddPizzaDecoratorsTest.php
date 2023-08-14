<?php 
namespace DesignPatterns\Test\Structural\Decorator;

use DesignPatterns\Structural\Decorator\decorators\BordaRequeijao;
use DesignPatterns\Structural\Decorator\decorators\MassaIntegral;
use DesignPatterns\Structural\Decorator\PizzaQueijo;
use PHPUnit\Framework\TestCase;

class AddPizzaDecoratorsTest extends TestCase
{
    public function test_add_decorators_pizza_queijo()
    {
        $pizzaQueijo = new PizzaQueijo();

        $this->assertEquals(22,$pizzaQueijo->getPrice());

        $pizzaQueijoBordaRequeijao = new BordaRequeijao($pizzaQueijo);

        $this->assertEquals(30.50, $pizzaQueijoBordaRequeijao->getPrice());

        $pizzaQueijoBordaRequeijaoMassaIntegral = new MassaIntegral($pizzaQueijoBordaRequeijao);

        $this->assertEquals(35.50, $pizzaQueijoBordaRequeijaoMassaIntegral->getPrice());
    }
}