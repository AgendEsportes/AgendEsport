import React, { Component } from 'react';
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import Register from './pages/Register';
import Logon from './pages/Logon';

class App extends Component {
  render() {
    return (
    <Router>
        <div>
          <h2>Welcome to React Router Tutorial</h2>
          <nav className="navbar navbar-expand-lg navbar-light bg-light">
          <ul className="navbar-nav mr-auto">
            <li><Link to={'/register'} className="nav-link">Contact</Link></li>
            <li><Link to={'/logon'} className="nav-link">About</Link></li>
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