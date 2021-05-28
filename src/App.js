
import './App.css';

import {Home} from './Home';
import {Department} from './Department';
import {Employee} from './Employee';
import {Navigation} from './Navigation';

import {BrowserRouter, Route, Switch} from 'react-router-dom';
import {SignUp} from './SignUp';

function App() {
  return (
    <BrowserRouter>
    <div className="container">
     <h3 className="m-3 d-flex justify-content-center">
     Ndërveprimi mes Investitorëve dhe ideatorve
     </h3>

     <Navigation/>

     <Switch>
       <Route path='/' component={Home} exact/>
       <Route path='/department' component={Department}/>
       <Route path='/employee' component={Employee}/>
       <Route path='/signup' component={SignUp}/>
     </Switch>
    </div>
    </BrowserRouter>
  );
}

export default App;
