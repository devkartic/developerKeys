<?php

namespace App\E8Inheritance\Library;

class ToasterPro extends Toaster
{
    public function __construct()
    {
        parent::__construct();
        $this->size = 4;
    }

    public function toastBagel(): void
    {
        foreach ($this->slices as $key => $slice) {
            echo ($key + 1) . ': Toasting ' . $slice . ' with bagels option ' . PHP_EOL;
        }
    }
}