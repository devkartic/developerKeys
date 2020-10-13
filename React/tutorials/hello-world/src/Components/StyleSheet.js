import React from 'react'
import './Css/Stylesheet.css'

function StyleSheet(props) {
    
    let primary = props.style ? 'primary' : ''

    return (
        <div>
            <h1 className={ `${primary} fo-md` }>Stylesheets</h1>
        </div>
    )
}

export default StyleSheet
