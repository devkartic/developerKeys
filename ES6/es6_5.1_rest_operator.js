// Rest operator in ES6

/*
    Rest operator convert multiples[not matter how much] parameter to array
    When ... use as arguments it's called rest operator.
 */
useRestOperator = (...args) => {
    let sum = 0;
    for(let i in args){
        sum += args[i];
    }
    return sum;
}


console.log(useRestOperator(10, 20, 30, 40, 50, 60));
console.log(useRestOperator(10, 20, 30, 40, 50));
console.log(useRestOperator(10, 20, 30, 40));
console.log(useRestOperator(10, 20, 30));
console.log(useRestOperator(10, 20));