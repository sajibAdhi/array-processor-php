<?php

class IntegerArrayProcessor
{
    private array $array;

    public function __construct(array $inputArray)
    {
        $this->array = $inputArray;
    }

    public function sort(): array
    {
        sort($this->array);
        return $this->array;
    }

    public function minimum(): int
    {
        return min($this->array);
    }

    public function maximum(): int
    {
        return max($this->array);
    }
}
