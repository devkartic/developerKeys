// Promise in ES6

let complete = true;

let promise = (complete) => {
    return new Promise(function (resolve, reject) {
        console.log('Fetching data, Please wait...');
        setTimeout(()=>{
            if(complete){
                resolve('Action performed successfully.');
            }else{
                reject('Action failed');
            }
        }, 3000);
    });
}

let onResolved = (result) => {
    console.log(result);
}

let onRejection = (error) => {
    console.log(error);
}

promise(true).then(onResolved).catch(onRejection);

// console.log(promise(true));
