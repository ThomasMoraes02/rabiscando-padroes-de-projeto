<?php
namespace DesignPatterns\Behavioral\Iterator;

class MatrizIterator implements Iterator
{
    private array $matriz;

    private int $keyLine = 0;

    private int $keyColumn = 0;

    private int $quantityLines;

    private int $quantityColumns;

    public function __construct(array $matriz)
    {
        $this->matriz = $matriz;
        $this->quantityLines = count($this->matriz);
        $this->quantityColumns = count($this->matriz[0]);
    }

    public function hasNext(): bool
    {
        if($this->keyLine >= $this->quantityLines) {
            return false;
        }
        return true;
    }

    /**
     * @return mixed
     */
    public function next()
    {
        $item = $this->matriz[$this->keyLine][$this->keyColumn];
        $this->addKey();
        return $item;
    }

    private function addKey(): void
    {
        $item = $this->matriz[$this->keyLine][$this->keyColumn];

        if($this->keyColumn == ($this->quantityColumns - 1)) {
            $this->keyLine++;
            $this->keyColumn = 0;
        } else {
            $this->keyColumn++;
        }
    }
}