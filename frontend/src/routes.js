import React from 'react';
import { BrowserRouter as Router, Routes, Route} from 'react-router-dom'


import Logon from './pages/Logon';
import Register from './pages/Register';
//import Lists from './pages/Lists';
import { FiLayout } from 'react-icons/fi';

export default function Rotas() {
  return (
    <Router>
      <FiLayout>
      <Routes>
        <Route path="/" element={<Logon/>} />
        <Route path="/register" element={(<Register/>)} />
      </Routes>
      </FiLayout>
    </Router>
  );
}