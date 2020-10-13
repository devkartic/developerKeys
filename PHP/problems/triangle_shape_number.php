<?php

// Problem: Triangle shape

$num = 1;

for($i = $num; $i <5; $i++){
    for($j=0; $j < $i; $j++){
        echo $num.' ';
        $num++;
    }
    echo ' <br />';
}