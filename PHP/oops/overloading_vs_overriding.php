<?php
/* Function overloading VS Overriding in PHP
Answer :
    Function overloading and overriding is the OOPs feature in PHP. In function overloading, more than one function can have
    same method signature but different number of arguments. But in case of function overriding, more than one functions will
    have same method signature and number of arguments.

    Function Overloading: Function overloading contains same function name and that function preforms different task according
    to number of arguments. For example, find the area of certain shapes where radius are given then it should return area of
    circle if height and width are given then it should give area of rectangle and others. Like other OOP languages function
    overloading can not be done by native approach. In PHP function overloading is done with the help of magic function __call().
    This function takes function name and arguments.
*/

// Example:
// overloading in PHP
/*
class shape { // Creating a class of type shape
    // __call is magic function which accepts
    // function name and arguments
    function __call($name_of_function, $arguments) {

        // It will match the function name
        if($name_of_function == 'area') {

            switch (count($arguments)) {

                // If there is only one argument
                // area of circle
                case 1:
                    return 3.14 * $arguments[0];

                // IF two arguments then area is rectangle;
                case 2:
                    return $arguments[0]*$arguments[1];
            }
        }
    }
}

// Declaring a shape type object
$s = new Shape;

// Function call
echo($s->area(2));
echo '<br/>';

// calling area method for rectangle
echo ($s->area(4, 2));
*/

/*
Output:
6.28
8
*/
/*---------------------------------------------------------------------------*/
/*
Function Overriding:
Function overriding is same as other OOPs programming languages. In function overriding, both parent and child classes
should have same function name with and number of arguments. It is used to replace parent method in child class. The
purpose of overriding is to change the behavior of parent class method. The two methods with the same name and same
parameter is called overriding.
*/
// Example:
// function overriding
/*
class P { // This is parent class
    // Function geeks of parent class
    function geeks() {
        echo "Parent";
    }
}

// This is child class
class C extends P {

    // Overriding geeks method
    function geeks() {
        echo "\nChild";
    }
}

// Reference type of parent
$p = new P;

// Reference type of child
$c= new C;

// print Parent
$p->geeks();
echo '<br/>';
// Print child
$c->geeks();
*/

/*
Output:
Parent
Child
*/

