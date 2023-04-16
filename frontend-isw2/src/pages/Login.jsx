import React, {useState} from 'react';
/*import { Link } from 'react-router-dom';
import { Route } from 'react-router-dom';
import { Routes } from 'react-router-dom';*/
import '../estilos/css/Login.css';
import swal from 'sweetalert';




export const Login = (props) => {
    const [email,setEmail] = useState("");
    const [pass,setPass] = useState("");

    const handleSubmit = (e) => {
        e.preventDefault();
    }

    const alerta = () =>{
        swal("Ingreso Exitoso")
    }

    return(
        <div className='auth-form-container'>
            <h1 className='tittle'>BIENVENIDO A ESTUDIANDO.PE</h1>
            <form className='login-form' onSubmit={handleSubmit}>
                <label htmlFor = "email" >Correo</label>
                <input value ={email} onChange={(e) => setEmail(e.target.value)} type = "email" placeholder = "Ingresa tu correo" id="email" name="email"/>
                <label htmlFor = "password" >Contraseña</label>
                <input value={pass} onChange={(e) => setPass(e.target.value)} type = "password" placeholder = "*************" id="password" name="password"/>
                
                
            </form>
            <a href="/Register"> <button className ="link-btn" >¿Aun no tienes una cuenta? Registrate en estudiando.pe </button></a>
            <a href="/Recupera"> <button className ="link-btn" >¿Te olvidaste tu contraseña? Cambiar contraseña </button></a>

            <button onClick={()=>alerta()}> LOGIN </button>
        </div>
    )
}