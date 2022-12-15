import React, { Component } from 'react';
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import Register from './pages/Register';
import Logon from './pages/Logon';

class App extends Component {
  render() {
    return (
    <Router>
        <div> 
          <div id="container">
            <img scr="services/image.png" alt="AgendEsport"/>
          </div>
          
          <nav className="navbar navbar-expand-lg navbar-light bg-light">
          <ul className="navbar-nav mr-auto">
            <li><Link to={'/register'} className="nav-link">Registre-se</Link></li>
            <li><Link to={'/logon'} className="nav-link">Login</Link></li>
          </ul>
          </nav>
          <hr />
          <Routes>
              <Route path='/register' element={<Register/>} />
              <Route path='/logon' element={<Logon/>} />
          </Routes>
        </div>
      </Router>
    );
  }
}

export default App;