// Object literal in ES6

let name = 'Kartic'
let designation = 'Software Engineer';
let address = 'Address';
let obj = {
    name, // name : name, If object property and assign variable name is same , no need to assign use colon
    designation,
    ['present' + address] : 'Dhaka',
    ['permanent' + address] : 'Pirojpur',
    details(name, designation){ // Created function with parameter in object, Not need to use function keyword
        return { name, designation } // Return object
    },
    'show details'(name, designation){ // Use function with space
        return { name, designation }  // Return object
    }
}

console.log(obj);
console.log(obj['details'](name, designation));
console.log(obj['show details'](name, designation));