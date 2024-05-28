<?php

namespace App;

class ProductCirc extends Product
{
    public function __construct(
        string $name,
        float $price,
        private int $diameter
    ) {
        parent::__construct($name, $price);
    }

    public function getSurface(): float
    {
        return M_PI * (($this->diameter / 2) ** 2);
    }
}
