<?php

namespace App\E8Inheritance\Library;

class Toaster
{
    protected array $slices = [];
    protected int $size;

    public function __construct()
    {
        $this->size = 2;
    }

    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast(): void
    {
        foreach ($this->slices as $key => $slice) {
            echo ($key + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }
}