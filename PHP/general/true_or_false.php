<?php
/*
 *
 * <?php
    $x=TRUE;
    $y=FALSE;
    $z=$y OR $x;
    ?>

 * Is $z TRUE or FALSE?
 * In this case, $z will be FALSE because the above code is equivalent to <?php ($z=$y) OR $x ?> rather than <?php $z=($y OR $x) ?>
 *  as might be expected - because the OR operator has lower precedence than assignment operators.

 * On the other hand, after this code sequence:
 * <?php
    $x=TRUE;
    $y=FALSE;
    $z=$y || $x;
    ?>

 * $z will be TRUE, as expected, because the || operator has higher precedence than assignment:  The code is equivalent to $z=($y OR $x).

 * This is why you should NEVER use the OR operator without explicit parentheses around the expression where it is being used.
 *
 * 
 * Note for JavaScript developers:

 * In PHP, an empty array.txt evaluates to false, while in JavaScript an empty array.txt evaluates to true.

 * In PHP, you can test an empty array.txt as <?php if(!$stuff) …; ?> which won’t work in JavaScript where you need to test the array.txt length.

 * This is because in JavaScript, an array.txt is an object, and, while it may not have any elements, it is still regarded as something.

 * Just a trap for young players who routinely work in both langauges.

 * 
 */

$x = true;
$y = true;
$z = $x OR $y;

var_dump($z);
$z = $y || $x;
echo '<br/>';
var_dump($z);
echo '<br/>';



