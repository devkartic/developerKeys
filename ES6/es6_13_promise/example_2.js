// Calculation example for Promise in ES6

let complete = true;

let promise = (num1, num2) => {
    return new Promise(function (resolve, reject) {
        console.log('Fetching data, Please wait...');
        let result = num1 / num2;
        setTimeout(()=>{
            if(num1, num2){
                resolve(`Your result is: ${result}.`);
            }else{
                reject('Calculation failed!');
            }
        }, 3000);
    });
}


promise(45, 9).then((result) => {
    console.log(result);
}).catch((error) => {
    console.log(error);
});

