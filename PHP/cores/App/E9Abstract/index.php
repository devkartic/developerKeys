<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../../vendor/autoload.php';

$fields = [
    new \App\E9Abstract\Library\Text('textField'),
    new \App\E9Abstract\Library\Checkbox('checkField'),
    new \App\E9Abstract\Library\Radio('radioField'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br/>';
}