<?php

namespace App\E11LateStaticBinding\Library;

class ClassA
{
    protected string $name = 'A';

    public function getName(): string
    {
        var_dump(get_class($this));
        return $this->name;
    }
}