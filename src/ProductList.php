<?php

namespace App;

class ProductList
{
    public function __construct(
        /** @var Product[] */
        private array $products
    ) {
    }

    public function display(): void
    {
        foreach ($this->products as $p) {
            echo $p->getName() . " (" . $p->getSurface() . ")<br />";
        }
    }
}
