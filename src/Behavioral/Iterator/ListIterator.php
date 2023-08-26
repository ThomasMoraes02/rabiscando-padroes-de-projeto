<?php
namespace DesignPatterns\Behavioral\Iterator;

class ListIterator implements Iterator
{
    private array $list;

    private int $key = 0;

    private int $lenght;

    public function __construct(array $list)
    {
        $this->list = $list;
        $this->lenght = count($this->list);
    }

    public function hasNext(): bool
    {
        if($this->key >= $this->lenght) {
            return false;
        }
        return true;
    }

    /**
     * @return mixed
     */
    public function next()
    {
        $item = $this->list[$this->key];
        $this->key++;
        return $item;
    }
}