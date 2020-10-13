// ES6 Var vs Let vs Const

/*
var keyword :

/*
/*
    var a = 10;
    a = 20
*/

/*
let keyword :
/*
/*
    let a = 10;
    a = 20

 */

/*
const keyword :

/*
/*
    const a = 10;
    a = 20
*/



/*
array.txt define as const :
/*
/*
    const arr = [];

    arr.push(5);
    arr.push(10);

    console.log(arr);

*/

/*  var keyword limitations :

*/
/*
    var a = 10;

    if(true){
        var a = 20;
        console.log(a);
    }

    console.log(a);

*/

/*  let keyword benifits :
let keyword use for block scope.
*/

/*
    let a = 10;

    if(true){
        let a = 20;
        console.log(a);
    }

    console.log(a);

*/


    function demo(){
        {
            let x = 10;
            {
                const x = 20;
                console.log(x);
            }
            console.log(x);
        }
        console.log(x);
    }

    demo();
