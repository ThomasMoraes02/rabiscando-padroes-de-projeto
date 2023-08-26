<?php 
namespace DesignPatterns\Behavioral\Iterator;

class ImpressAgregator
{
    public static function iterate(Iterator $iterator)
    {
        while ($iterator->hasNext()) {
            return $iterator->next() . " ";
        }
    }
}