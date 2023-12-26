<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\E8Inheritance\Library\Toaster;
use App\E8Inheritance\Library\ToasterPro;

//$toaster = new Toaster();
$toaster = new ToasterPro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');

//$toaster->toast();
$toaster->toastBagel();