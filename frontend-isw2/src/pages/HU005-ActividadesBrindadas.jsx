import React, { useState } from 'react';
import '../estilos/css/Patrick.css';



const ActividadesBrindadas = () => {
  const [data, setData] = useState([
    { name: 'Alexander Marticorena', propietary: 'yo', course: 'Matemáticas', size: '10MB' },
    { name: 'Pedro', course: 'Historia', size: '15MB' , propietary: 'yo'},
    { name: 'Ana', course: 'Inglés', size: '12MB', propietary: 'yo' }
  ]);

  return (
    <div className="card">
      <div className="card-body">
        <h5 className="card-title">Tabla de Actividades Brindadas</h5>
        <table className="table table-hover">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Propietario</th>
              <th>Curso</th>
              <th>Tamaño de archivo</th>
            </tr>
          </thead>
          <tbody>
            {data.map((item, index) => (
              <tr key={index}>
                <td>{item.name}</td>
                <td>{item.propietary}</td>
                <td>{item.course}</td>
                <td>{item.size}</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
};

export default ActividadesBrindadas;
