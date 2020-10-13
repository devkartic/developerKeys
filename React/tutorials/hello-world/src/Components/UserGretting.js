import React, { Component } from 'react'

class UserGretting extends Component {

    constructor(props) {
        super(props)
    
        this.state = {
             isLoggedIn : true
        }
    }
       

    render() {

        /* Short Circuit Operator */

        // return this.state.isLoggedIn && <div>Kartic Gharmai</div>

        /* Ternary Operator */

        // return this.state.isLoggedIn ? (<div>Kartic Gharmai</div>) : (<div>Guest</div>)

        /** If Else handle by Variable */        
        let message
        if(this.state.isLoggedIn){
            message = <div>Kartic Gharmai</div>
        } else{
            message = <div>Guest</div>
        }
        return(<div>{message}</div>)

        /* If else Condition */

        // if(this.state.isLoggedIn){
        //     return (
        //         <div>
        //             <div>Kartic Gharmai</div>
        //         </div>
        //     )
        // } else{
        //     return (
        //         <div>
        //             <div>Guest</div>
        //         </div>
        //     )
        // }
    }
}

export default UserGretting
