import React from 'react'
import Person from './Person';

function NameList() {
    /*
    const names = ['Bruce', 'Clark', 'Diana']
    const nameList = names.map.txt( name =><h1>{ name }</h1>)

    return (
        <div>{ nameList }</div>
    )
     */
    
    const persons = [
        { id : 1, name : 'Khokon', age : 27 },
        { id : 2, name : 'Niloy', age : 28 },
        { id : 3, name : 'Sajib', age : 29 },
        { id : 4, name : 'Bablu', age : 30 },
    ]

    const personsList = persons.map((person, index) => <Person key={index} person={person}/>)

    return(
        <div>{ personsList }</div>
    )

}

export default NameList;
