import React from 'react'

function Inline() {

    const heading = {
        fontSize : '45px',
        color : 'blue'
    }

    return (
        <div>
            <h1 style={heading}>Inline CSS</h1>
            <h1 className='error'>Error</h1>
        </div>
    )
}

export default Inline
