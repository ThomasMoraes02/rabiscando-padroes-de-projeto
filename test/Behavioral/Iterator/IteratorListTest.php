<?php 
namespace DesignPatterns\Test\Behavioral\Iterator;

use DesignPatterns\Behavioral\Iterator\ImpressAgregator;
use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Iterator\ListIterator;
use DesignPatterns\Behavioral\Iterator\MatrizIterator;

class IteratorListTest extends TestCase
{
    public function test_iterator_list()
    {
        $list = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $listIterator = new ListIterator($list);

        $iterate = ImpressAgregator::iterate($listIterator);
        $this->assertEquals("1 ", $iterate);
    }

    public function test_iterator_matriz()
    {
        $matriz = [0 => [1,2,3],
                        [4,5,6],
                        [7,8,9]];

        $matrizIterator = new MatrizIterator($matriz);

        $iterate = ImpressAgregator::iterate($matrizIterator);
        $this->assertEquals("1 ", $iterate);
    }
}