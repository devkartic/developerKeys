// For Primitive
let a = 1;
console.log(a); // output: 1
let b = a;
console.log(b); // output: 1
b = 3;
console.log(b); // output: 3
console.log(a); // output: 1

// For Reference object

let obj = {
    name : 'Javascript'
}

console.log(obj.name); // Output: Javascript

let obj2 = obj;

console.log(obj2.name); // Output: Javascript

obj2.name = 'React';

console.log(obj.name); // Output: React

// For Array variable Immutablity using arrayVariable.concat

let x = [1, 2, 3];

let y = x.concat([4, 5]);

console.log(x, y); // Output: [ 1, 2, 3 ] [ 1, 2, 3, 4, 5 ]

// For Object immutablity by using Object.assign

let obje = {
    name: 'Javascript', review: [1, 2, 3]
}

let obje2 = Object.assign({}, obje, {released: 1995});

console.log(obje); // Output: { name: 'Javascript', review: [ 1, 2, 3 ] }

console.log(obje2); // Output: { name: 'Javascript', review: [ 1, 2, 3 ], released: 1995 }

// concat , filter, map.txt, reduce