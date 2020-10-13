import React, { Component } from 'react'

class Form extends Component {

    constructor(props) {
        super(props)
    
        this.state = {
             username: '',
             comments: '',
             topic: ''
        }
    }

    changeUsernameHandler = (props) => {
        this.setState({
            username: props.target.value
        })
    }

    changeCommentsHandler = (props) => {
        this.setState({
            comments: props.target.value
        })
    }

    changeTopicHandler = (props) => {
        this.setState({
            topic: props.target.value
        })
    }

    formSubmitHandler = event => {
        console.log(`${this.state.username} ${this.state.comments} ${this.state.topic}`)
        event.preventDefault()
    }
    

    render() {

        const { username, comments, topic } = this.state

        return (
            <form onSubmit={this.formSubmitHandler}>
                <div>
                    <label> Username </label>
                    <input type="text" value={username} onChange={this.changeUsernameHandler} />
                </div>
                <div>
                    <label> Comments </label>
                    <textarea type="text" value={comments} onChange={this.changeCommentsHandler}></textarea>
                </div>
                <div>
                    <label> Topic </label>
                    <select value={topic} onChange={this.changeTopicHandler}>
                        <option value=''>Select One</option>
                        <option value='React'>React</option>
                        <option value='Angular'>Angular</option>
                        <option value='Vue'>Vue</option>
                    </select>
                </div>
                <button type="submit">Submit</button>
            </form>
        )
    }
}

export default Form
