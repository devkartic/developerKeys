<?php

// Problem: Fibonacci Series (sum of 2 digits)


echo 'Fibonacci Series (sum of 2 digits) : ';
$num1 = 0;
$num2 = 1;
$num3 = $num1 + $num2;
echo $num1.' '.$num2;
while ($num3<50){
    echo ' '.$num3;
    $num1 = $num2;
    $num2 = $num3;
    $num3 = $num1 + $num2;
}

echo '<br >';


// Problem: Fibonacci Series (sum of 3 digits)

echo 'Fibonacci Series (sum of 3 digits) : ';
$num1 = 0;
$num2 = 1;
$num3 = 1;
$num4 = $num1 + $num2 + $num3;
echo $num1.' '.$num2.' '.$num3;
while ($num3<50){
    echo ' '.$num4;
    $num1 = $num2;
    $num2 = $num3;
    $num3 = $num4;
    $num4 = $num1 + $num2 + $num3;
}

