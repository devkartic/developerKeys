import React from 'react';


// function Greet(){
//     return(
//         <h1>Kartic Gharami</h1>
//     );
// }

const Greet = props => {
    const { name, heroName } = props;
    return (
        <div>
            <h1>Greet! Hello, { name } also known as { heroName }</h1>
            { props.children }
        </div>
    )
}

export default Greet