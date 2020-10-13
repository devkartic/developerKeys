<?php
/*

    Beware of certain control behavior with boolean and non boolean values :

    Consider that the 0 could by any parameters including itself

*/

var_dump(0 == 1); // false
var_dump(0 == (bool)'all'); // false
var_dump(0 == 'all'); // TRUE, take care
var_dump(0 === 'all'); // false

/*

    To avoid this behavior, you need to cast your parameter as string like that :

*/

var_dump((string)0 == 'all'); // false

/*
    ---------------------------------------------------------------------------------------------
    Note you can also use the '!' to convert a number to a boolean, as if it was an explicit (bool) cast then NOT.

    So you can do something like:

*/


$t = !0; // This will === true;
$f = !1; // This will === false;


/*
    And non-integers are casted as if to bool, then NOT.

    Example:
*/
$a = !array();      // This will === true;
$a = !array('a');   // This will === false;
$s = !"";           // This will === true;
$s = !"hello";      // This will === false;


/*
    To cast as if using a (bool) you can NOT the NOT with "!!" (double '!'), then you are casting to the correct (bool).

Example:
*/
$a = !!array();   // This will === false; (as expected)
/*
    This can be a substitute for count($array.txt) > 0 or !(empty($array.txt)) to check to see if an array.txt is empty or not  (you would use: !!$array.txt).
*/

$status = (!!array() ? 'complete' : 'incomplete');

$s = !!"testing"; // This will === true; (as expected)
/*
    Note: normal casting rules apply so a !!"0" would evaluate to an === false
*/
