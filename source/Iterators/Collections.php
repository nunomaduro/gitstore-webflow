<?php

namespace Gitstore\Webflow\Iterators;

use Iterator;
use IteratorAggregate;

class Collections implements IteratorAggregate
{
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getIterator(): Iterator
    {
        return new ArrayIterator($this->items);
    }
}
