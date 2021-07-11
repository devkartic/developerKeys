// ES6 Lexical this

// Js code
/*
    const obj = {
        name : 'twinkle Cats',
        print : function(){
            console.log(this)
        }
    }
*/

/*
    const obj = {
        name : 'twinkle Cats',
        print : function(){
            setTimeout(function(){
                console.log(this);
            }, 1000)
        }
    }
*/

/*
    const obj = {
        name : 'twinkle Cats',
        print : function(){
            setTimeout(function(){
                console.log(this);
            }.bind(this), 1000)
        }
    }
*/

// ES6 code

/*
    const obj = {
        name : 'twinkle Cats',
        print : function(){
            setTimeout(()=>{
                console.log(this);
            }, 1000)
        }
    }
*/

obj.print();







