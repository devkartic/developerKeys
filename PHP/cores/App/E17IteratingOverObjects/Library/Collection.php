<?php

namespace App\E17IteratingOverObjects\Library;

use Traversable;

class Collection implements \IteratorAggregate
{
    public function __construct(private array $items)
    {
    }

    public function getIterator(): Traversable
    {
        // TODO: Implement getIterator() method.
        return new \ArrayIterator($this->items);
    }
}