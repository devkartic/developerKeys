import React, { Component } from 'react'

class LifecycleB extends Component {

    constructor(props) {
        super(props)
    
        this.state = {
             name: 'Gharami'
        }

        console.log('return LifecycleB  form constructor')

    }

    static getDerivedStateFromProps(nextProps, prevState) {
        console.log('return LifecycleB from getDerivedFromProps')
        return null;
    }
      
    componentDidMount(){
        console.log('return LifecycleB from componentDidMount')
    }

    render() {
        console.log('return LifecycleB from Render')
        return (
            <div>LifecycleB</div>
        )
    }
}

export default LifecycleB
