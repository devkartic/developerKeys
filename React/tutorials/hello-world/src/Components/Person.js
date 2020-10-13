import React from 'react'

function Person({person}) { // {person} use for Destructure
    return (
        <div>
            <h2>My name is {person.name}. I am {person.age}. </h2> 
        </div>
    )
}
export default Person
