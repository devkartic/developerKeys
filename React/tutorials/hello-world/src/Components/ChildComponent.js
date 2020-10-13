import React from 'react'

function ChildComponent(props) {
    return (
        <div>
            <button onClick={()=>props.greetHandler('child')} >Click Child</button>
        </div>
    )
}

export default ChildComponent
