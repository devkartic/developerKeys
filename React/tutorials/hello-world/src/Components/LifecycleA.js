import React, { Component } from 'react'
import LifecycleB from './LifecycleB';

class LifecycleA extends Component {

    constructor(props) {
        super(props)
    
        this.state = {
             name: 'Gharami'
        }

        console.log('return LifecycleA  form constructor')

    }

    static getDerivedStateFromProps(nextProps, prevState) {
        console.log('return LifecycleA from getDerivedFromProps')
        return null;
    }
      
    componentDidMount(){
        console.log('return LifecycleA from componentDidMount')
    }

    render() {
        console.log('return LifeCycleA from Render')
        return (
            <div>
                <div>LifecycleA</div>
                <LifecycleB />
            </div>
        )
    }
}

export default LifecycleA
