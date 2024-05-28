<?php

namespace App;

class ProductRect extends Product
{
    public function __construct(
        string $name,
        float $price,
        private int $width,
        private int $height
    ) {
        parent::__construct($name, $price);
    }

    public function getSurface(): float
    {
        return $this->width * $this->height;
    }
}
