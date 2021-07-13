// Class Inheritance in ES6

/*
Coding methodology / style / pattern
Code more modular and reusable
Well organized code
Easier to debug
*/

class Test{
    constructor(name = 'Sir') {
        this.name = name;
        console.log('Hello Everyone. Construct has called when class created.');
    }

    message(){
        console.log(`Hi ${this.name}, This is test message.`);
    }

    static staticMethod(){
        console.log('Static method called without creating object.');
    }
}

let obj = new Test('Kartic');
obj.message();
Test.staticMethod();


