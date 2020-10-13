<?php

/* 

* Remove element by user array_search, unset array.txt index

*/


function remove_element($element, $array)
{
    //array_search returns index of element, and FALSE if nothing is found
    $index = array_search($element, $array);
    if($index!==fasle) unset ($array[$index]);
    return $array;
}

$array = array(2, 4, 5);

$result = remove_element(-1, $array);
var_dump($result);
echo '<br/>';
$result = remove_element(5, $array);
var_dump($result);
echo '<br/>';
$result = remove_element(7, $array);
var_dump($result);
echo '<br/>';
$result = remove_element('string', $array);
var_dump($result);
echo '<br/>';

