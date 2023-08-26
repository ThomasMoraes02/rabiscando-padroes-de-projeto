<?php 
namespace DesignPatterns\Behavioral\Iterator;

interface Iterator
{
    public function hasNext(): bool;

    /** @return mixed */
    public function next();
}