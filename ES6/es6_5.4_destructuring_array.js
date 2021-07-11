// Destructuring array in ES6

let user = ['Kartic', 'Software Engineer', 28, ['Male', 'Dhaka']]; // Destructuring also worked with nested array.

let [name, profession, age] = user; // general uses.

// Use with function
function destructure([name, profession, age=25, [gender, city]]){ // age 25 is default value
    return {name, profession, age, gender, city};
}

console.log(destructure(user));



console.log(name);
console.log(profession);
console.log(age);