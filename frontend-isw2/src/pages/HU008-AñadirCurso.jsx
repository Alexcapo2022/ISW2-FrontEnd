import '../estilos/css/AñadirCurso.css';
import Navbar from "../componentes/navbar"

const AñadirCurso = () => {
    return(
        <div>
          <Navbar/>
              <h1 className="titulo"> Agregar un nuevo Curso</h1>
  <div className="container">
    <div className="card">
      <h4>Python</h4>
      <p className="AC">
        Curso de Programación <br />
        <br /> Codigo:LG-BA-17955 <br />
        Agregar <br />
      </p>
    </div>
    <div className="card">
      <h4>Javascript</h4>
      <p className="AC">
      Curso de Programación <br /> 
        <br /> Codigo:LG-BA-17955 <br />
        Agregar <br />
      </p>

    </div>
    <div className="card">
      <h4>Curso de Arte</h4>
      <p className="AC">
        Apto para todo público <br /> 
        <br /> Codigo:LG-BA-17955 <br />
        Agregar <br />

      </p>

    </div>
    <div className="card">
      <h4>Curso de Música</h4>
      <p className="AC" style={{color:"black"}} >
      Apto para todo público <br />
        <br /> Codigo:LG-BA-17955 <br />
        Agregar <br />
      </p>
    </div>
  </div>
        </div>
    )
}

export default AñadirCurso