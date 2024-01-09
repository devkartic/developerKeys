<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

use App\E14SerializeObjectAndSerializeMagicMethods\Library\Invoice;

/*
echo serialize(true) . PHP_EOL; // Output: b:1;
echo serialize(1) . PHP_EOL; // Output: i:1;
echo serialize(2.5) . PHP_EOL; // Output: d:2.5;
echo serialize([1, 2, 3]) . PHP_EOL; // Output: a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}
echo serialize(['a' => 1, 'b' => 2]) . PHP_EOL; // Output: a:2:{s:1:"a";i:1;s:1:"b";i:2;}
var_dump(unserialize(serialize(['a' => 1, 'b' => 2]))) . PHP_EOL; // Output: ['a' => 1, 'b' => 2]
*/

$invoice = new Invoice(25, 'Invoice 1', 12345678);

echo serialize($invoice) . PHP_EOL;