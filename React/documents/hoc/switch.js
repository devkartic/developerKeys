//  switch in React js

import {BrowserRouter as Router, Route, Switch} from "react-router-dom";


//  Switch use for exact route path and component load to browser
// Switch serach for match the exact url and if found then stop the execution.

<Router>
<div className="container-fluid">
    <Navbar/>
    <Switch>
        <Route exact path="/" component={Home} />
        <Route path="/about" component={About} />
        <Route path="/contact" component={Contact} />
        <Route path="/:post_id" component={Post} />
    </Switch>
</div>
</Router>

