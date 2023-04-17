import React, {useState} from 'react';
/*import { Link } from 'react-router-dom';
import { Route } from 'react-router-dom';
import { Routes } from 'react-router-dom';*/
import '../estilos/css/Login.css';
import swal from 'sweetalert';




export const Login = (props) => {
    const [email,setEmail] = useState("");
    const [pass,setPass] = useState("");
    const [errorLogin, setErrorLogin] = useState(false)
    const [logged,setLogged]=useState(false)

    const handleSubmit = (e) => {
        e.preventDefault();
    }
    

    const alerta = () =>{
        swal("Ingreso Exitoso")
    }
    console.log(logged)
    console.log(alerta)

    const htppLogin = async(user) => {
        const resp = await fetch("http://localhost:4444/login",{
            method: "POST",
            headers : {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(user),
        });
        const data = await resp.json();
        if (data.verify){
            // Login correcto.
            setLogged(true)
            alert(`Welcome ${user.email}.`);
            window.location.href="http://localhost:4445/PaginaPrincipal"; // Redireccion con renderizado
            localStorage.setItem("Usuario_correo",user.email)
        }else{
             // No existe el usuario. Error.
             setErrorLogin(true)
        }
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

            <button onClick={()=>{
                 if (email !== "" && pass !== "") {
                    const user = {};
                    user.email = email;
                    user.password = pass;
                    htppLogin(user);
                    setEmail("");
                    setPass("");
                    

                } else {
                    alert("Llena toda la información!");
                }
            }}> LOGIN </button>{(() => {
                if (errorLogin) {
                    return <div className="alert alert-danger">Error. El correo o contraseña es incorrecto.</div>
                }})}
        </div>
    )
    
}