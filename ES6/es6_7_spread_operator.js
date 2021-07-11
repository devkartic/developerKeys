// Spread operator in ES6

/* 

Spread operator convert array to string which all array values separate by space.
When ... use as parameter it's called spread operator.

 */
let arr = [10, 20];

useRestOperator = (...args) => {
    let sum = 0;
    for(let i in args){
        sum += args[i];
    }
    return sum;
}


console.log(useRestOperator(...arr, 30, 40));