<?php

// Error Handling

error_reporting(E_ALL & ~E_WARNING);
function errorHandler(
    int     $type,
    string  $message,
    ?string $file = null,
    ?string $line = null
): bool
{
    echo $type . ':' . $message . 'in' . $file . 'on line' . $line;
    return false;
}

set_error_handler('errorHandler', E_ALL);