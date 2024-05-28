<?php

namespace App;

abstract class Product
{
    public function __construct(
        protected string $name,
        protected float $price
    ) {
    }

    /**
     * Calcule la surface du produit
     *
     * @return float Du texte
     */
    abstract public function getSurface(): float;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
