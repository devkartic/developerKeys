<?php
/* What Is Polymorphism ?
Answer :
	Polymorphism is basically derived from the Greek which means 'many forms'.

    Polymorphism describes a pattern in object oriented programming in which classes have different
	functionality while sharing a common interface.

	In other words, polymorphism is what join bunch of classes with one interface.
	polymorphism is a key part of php oops.
	As you can see in above image, printer class has a print method which performs multi task, 
	such as print to screen and print to paper.
	Also, you can take example of twin brothers, they look like same but have different characters.
 */

// Example 1:
/*
interface Shape{
            public function calcArea();
        }

        class Circle implements Shape{
            private $radius;

            public function __construct($radius)
            {
                $this -> radius = $radius;
            }

            public function calcArea()
            {
                return $this -> radius * $this -> radius * pi();
            }
        }

        class Rectangle implements Shape {
            private $width;
            private $height;

            public function __construct($width, $height)
            {
                $this -> width = $width;
                $this -> height = $height;
            }

            // calcArea calculates the area of rectangles
            public function calcArea()
            {
                return $this -> width * $this -> height;
            }
        }

        $objC = new Circle('20');
        $objR = new Rectangle(10, 7);

        echo $objC->calcArea();
        echo '<br />';
        echo $objR->calcArea();
        */

// Example 2:
/*
    class ParentClass {
        public function myOwnMethod() {
            echo "ParentClass method called";
        }
    }
    class ChildClass extends ParentClass {
        public function myOwnMethod() {
            echo "ChildClass method called";
        }
    }
    function runClass(ParentClass $c) {
        $c->myOwnMethod();
    }

    $c = new ChildClass();
    runClass($c);
*/