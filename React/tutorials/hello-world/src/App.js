import React from 'react';
import logo from './logo.svg';
import './App.css';
import Greet from './Components/Greet';
import Welcome from './Components/welcome'
import Message from './Components/message'
import Counter from './Components/Counter'
import FunctionClick from './Components/FunctionClick'
import ClassClick from './Components/ClassClick'
import EventBind from './Components/EventBind'
import ParentComponent from './Components/ParentComponent'
import UserGretting from './Components/UserGretting'
import NameList from './Components/NameList'
import Stylesheet from './Components/StyleSheet'
import Inline from './Components/Inline'
import './appStyles.css';
import styles from './appStyles.module.css'
import Form from './Components/Form';
import LifecycleA from './Components/LifecycleA';

function App() {
  return (
    <div className="App">

      <LifecycleA />

      {/* <Form /> */}

      {/* <h1 className='error'>Error</h1> */}
      {/* <h1 className={styles.success}>Success</h1> */}
      {/* <Inline /> */}
      {/* <Stylesheet style={ true }/> */}

      {/* <NameList /> */}
      {/* <UserGretting /> */}
      {/* <ParentComponent /> */}
      {/* <EventBind /> */}
      {/* <ClassClick /> */}
      {/* <FunctionClick /> */}
      {/* <Counter /> */}
      {/* <Message /> */}

      {/* <Greet name = 'Bruce' heroName = 'Batman' >
        <p>This is the children props</p>
      </Greet>
      <Greet name = 'Clark' heroName = 'Superman'>
        <button>Click me</button>
      </Greet> */}
      {/* <Greet name = 'Diana' heroName = 'Wonder Woman' /> */}
      {/* <Welcome name = 'Bruce' heroName = 'Batman'  /> */}
    </div>
  );
}

export default App;
