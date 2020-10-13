// rce for create Class Components by react-snippset tool
import React, { Component } from 'react'

class ClassClick extends Component {    
    clickHandler(){
        console.log('Button Clicked');
    }
    render() {
        return (
            <div>
                <button onClick={this.clickHandler}>Click</button>
            </div>
        )
    }
}

export default ClassClick
