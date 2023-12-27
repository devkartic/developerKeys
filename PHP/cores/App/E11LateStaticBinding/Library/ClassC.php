<?php

namespace App\E11LateStaticBinding\Library;

class ClassC
{
    protected static string $name = 'C';

    public static function getName(): string
    {
        var_dump(self::class);
        var_dump(static::class); // this static keyword calling class references
//        return self::$name;
        return static::$name; // late static binding
    }
}