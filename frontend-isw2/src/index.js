import React from 'react';
import ReactDOM from 'react-dom/client';


import HU009PaginaPrincipal from './pages/HU009-PaginaPrincipal';
import { Login } from './pages/Login';
import { Register } from './pages/Register';
import { BrowserRouter, Route, Routes } from 'react-router-dom';


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>

  <React.StrictMode>
    <BrowserRouter>
    <Routes>
      <Route path='/PaginaPrincipal' element={<HU009PaginaPrincipal />}/>
      <Route path='/Register' element={<Register/>}/>
      <Route path='/' element={<Login/>}/>
      
    </Routes>
    </BrowserRouter>
  </React.StrictMode>
  </React.StrictMode>
);


