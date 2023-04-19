
<script src="<?php echo base_url() ?>assets/js/actividades.js"></script>   

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú despegable</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="row">
  <div class="col-md-4" style="width: 350px">
    <!-- Menú -->
    <div class="card">
    <nav class="nav">
                <ul class="list">
                    <li class="list__item">
                        <div class="list__button">
                            <img src="assets/dashboard.svg" class="list__img">
                            <a href="#" class="nav__link">Inicio</a>
                        </div>
                    </li>

                    <li class="list__item list__item--click">
                        <div class="list__button list__button--click">
                            <img src="assets/docs.svg" class="list__img">
                            <a href="#" class="nav__link">Servicios</a>
                            <img src="assets/arrow.svg" class="list__arrow">
                        </div>

                        <ul class="list__show">
                            <li class="list__inside">
                                <a href="#" class="nav__link nav__link--inside">Actividades Brindadas</a>
                            </li>

                            <li class="list__inside">
                                <a href="#" class="nav__link nav__link--inside">Revisión</a>
                            </li>

                            <li class="list__inside">
                                <a href="#" class="nav__link nav__link--inside">Entregas</a>
                            </li>
                        </ul>

                    </li>


                    <li class="list__item">
                        <div class="list__button">
                            <img src="assets/stats.svg" class="list__img">
                            <a href="#" class="nav__link">Estadisticas</a>
                        </div>
                    </li>

                    <li class="list__item list__item--click">
                        <div class="list__button list__button--click">
                            <img src="assets/bell.svg" class="list__img">
                            <a href="#" class="nav__link">Reporte</a>
                            <img src="assets/arrow.svg" class="list__arrow">
                        </div>

                        <ul class="list__show">
                            <li class="list__inside">
                                <a href="#" class="nav__link nav__link--inside">Generar Reporte</a>
                            </li>

                        </ul>

                    </li>

                    <li class="list__item">
                        <div class="list__button">
                            <img src="assets/message.svg" class="list__img">
                            <a href="#" class="nav__link">Contacto</a>
                        </div>
                    </li>
                </ul>
            </nav>
    </div>
  </div>

  <div class="col-md-8">
    <br /><br /><br /><br />
   <div row>
    <div class="col-md-4">
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Mi unidad
    </button>
    <ul class="dropdown-menu">
    <button onclick="agregar_tarea()" class="btn btn-info d-none d-lg-block m-l-15" style="margin-right: 10px;">
        <i class="fa fa-plus-circle"></i> Subir archivo
    </button>    

    </ul>
    </div>


    </div>
    </div>

    <br />

    <div class="row">
    <div class="col-md-6 col-xl-3">
                <div class="card" style="top: auto">

                    <img src="<?= base_url(); ?>assets/images/ejerciciomate1.jpg" alt="" height="200" >
                    <div class="card-body">
                        <h5 class="card-title">Ecuaciones de primer grado</h5>  
                        <p class="card-text"><small class="text-body-secondary">Subido hace 3 minutos</small></p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                <div class="card" style="top: auto">

                    <img src="<?= base_url(); ?>assets/images/ejerciciomate2.png" alt="" height="200" >
                    <div class="card-body">
                        <h5 class="card-title">Ecuaciones diferenciales</h5>  
                        <p class="card-text"><small class="text-body-secondary">Subido hace 10 minutos</small></p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                <div class="card" style="top: auto">

                    <img src="<?= base_url(); ?>assets/images/conjuntos.jpg" alt="" height="200" >
                    <div class="card-body">
                        <h5 class="card-title">Conjuntos</h5>  
                        <p class="card-text"><small class="text-body-secondary">Subido hace 3 minutos</small></p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                <div class="card" style="top: auto">

                    <img src="<?= base_url(); ?>assets/images/integralestarea.jpg" alt="" height="200" >
                    <div class="card-body">
                        <h5 class="card-title">Integrales</h5>  
                        <p class="card-text"><small class="text-body-secondary">Subido hace 3 minutos</small></p>
                    </div>
                    </div>
                </div>
             
    </div>

    <!-- Tabla -->
    <div class="card">
            <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>

                                        <div id="cardCollpase5" class="collapse show">
                                        <h5 style="text-align: center;" class="card-title">ENTREGAS</h5>  

                                            <div class="table-responsive pt-3">
                                                <table class="table table-hover table-centered mb-0">
                                                    <thead>
                                                        <tr>
                                                        <th>Nombre</th>
                                                            
                                                            <th>Propietario</th>
                                                            <th>Ultima Modificación</th>
                                                            <th>Tamaño de archivo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td>
                                                            <button type="button" onclick="comentarios()" class="btn btn-info d-none d-lg-block m-l-15" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#comentario-modal">
                                                                Conjuntos 3er Grado
                                                            </button>
                                                        </td>                        
                                                            <td>Gabriel.Flores</td>
                                                            <td>Hace 3 días</td>
                                                            <td>144kb</td>
                                                        </tr>   
                                                        <tr>
                                                            <td>Ecuaciones primer grado 4to grado</td>
                                                            <td>Roberto.Carlos</td>
                                                            <td>Hace 4 días</td>
                                                            <td>200kb</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Diferenciales 5to grado</td>
                                                            <td>Alexander.Marticorena</td>
                                                            <td>Hace 7 días</td>
                                                            <td>120kb</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Integrales 5to grado</td>
                                                            <td>Hector.Velarde</td>
                                                            <td>Hace 13 días</td>
                                                            <td>200kb</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Integrales 5to grado</td>
                                                            <td>Patrick.Minan</td>
                                                            <td>Hace 14 días</td>
                                                            <td>180kb</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maximo comun divisor 1er grado</td>
                                                            <td>Renan.Salazar</td>
                                                            <td>Hace 20 días</td>
                                                            <td>180kb</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maximo comun divisor 1er grado</td>
                                                            <td>Jorge.Justo</td>
                                                            <td>Hace 21 días</td>
                                                            <td>170kb</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Expresiones algebraicas</td>
                                                            <td>Belen.Effio</td>
                                                            <td>Hace 21 días</td>
                                                            <td>170kb</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table responsive-->
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
    </div>
  </div>

  
</div>



<!-- BOTON CARGA ÂRCHIVO -->

<div id="masiva-activo-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  
    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- <h4 class="modal-title">Modal Content is Responsive</h4> -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                
                            <input type="hidden" value="" name="Id"/>
                            <div class="modal-body p-4">
        
                            <form action="<?php echo base_url('?/CsvController/uploadCsv');?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="csv_file" class="form-label">Selecciona el archivo</label>
                                        <input type="file" class="form-control" id="csv_file" name="csv_file">
                                    </div>
                                    <div class="dropdown">
                                    <div id="">
                                    <label class="form-label">Selecciona el grado</label></br>
                                

                                        <div class="btn-group" >
                                                                
                                                                <select id="SeleccionarQueue" class="btn btn-dark small-btn">
                                                                <option >Primer año</option>
                                                                <option >Segundo año</option>
                                                                <option >Tercer año</option>
                                                                <option >Cuarto año</option>
                                                                <option >Quinto año</option>

                                                                </select>
                                                                    
                                                                </div>
                
                        
                                                                &nbsp&nbsp&nbsp&nbsp&nbsp
                                                                <button type="submit" class="btn btn-primary">Cargar archivo</button>
                                    
                                        </div>
                                    
                                </form>

                                        </div>
                                    </div>
                                </div>
    </div>


    <div id="comentario-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <!-- Left sidebar -->
                                                        <div class="inbox-leftbar">

                                                            <a href="email-inbox.html" class="btn btn-danger w-100 waves-effect waves-light">Bandeja de entrada</a>

                                                            <div class="mail-list mt-4">
                                                                <a href="javascript: void(0);" class="text-danger fw-bold"><i class=""></i>&nbspRecibidos<span class="badge badge-soft-danger float-end ms-2">7</span></a>
                                                                <a href="javascript: void(0);"><i class="fe-star"></i>&nbspDestacados</a>
                                                                <a href="javascript: void(0);"><i class="fe-clock"></i>&nbspPropuestos<span class="badge badge-soft-info float-end ms-2">32</span></a>
                                                                <a href="javascript: void(0);"><i class="fe-send"></i>&nbspEnviados</a>
                                                                <a href="javascript: void(0);"><i class="fe-trash-2"></i>&nbspBorradores</a>
                                                            </div>

                                                   

                                                        </div>
                                                        <!-- End Left sidebar -->

                                                        <div class="inbox-rightbar">

                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-archive font-18"></i></button>
                                                                <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-alert-octagon font-18"></i></button>
                                                                <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-delete-variant font-18"></i></button>
                                                            </div>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-folder font-18"></i>
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <span class="dropdown-header">Move to</span>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                                </div>
                                                            </div>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-label font-18"></i>
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <span class="dropdown-header">Label as:</span>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                                </div>
                                                            </div>

                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal font-18"></i> More
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <span class="dropdown-header">More Option :</span>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                                                    <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                                                </div>
                                                            </div>

                                                            <div class="mt-4">
                                                                <form>
                                                                    <div class="mb-3">
                                                                        <input type="email" class="form-control" placeholder="To">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <input type="text" class="form-control" placeholder="Subject">
                                                                    </div>
                                                                    <div class="mb-3 card border-0">
                                                                        <div id="snow-editor" style="height: 230px;">
                                                                            <h3><span class="ql-size-large"></span></h3>
                                                                            <p><br></p>
                                                                            <h3></h3>
                                                                            <p><br></p>
                                                                          
                                                                            <p><br></p>
                                                                            <p>
                                                                            </p>
                                                                        </div> <!-- end Snow-editor-->
                                                                    </div>

                                                                    <div>
                                                                        <div class="text-end">
                                                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-content-save-outline"></i></button>
                                                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-delete"></i></button>
                                                                            <!-- <button class="btn btn-primary waves-effect waves-light"> <span>Send</span> <i class="mdi mdi-send ms-2"></i> </button> -->
                                                                            <form>
                                                                        <!-- your form fields here -->
                                                                        <button type="submit" class="btn btn-primary" onclick="alert('Correo enviado')">Enviar</button>
                                                                        
                                                                        </form>

                                                                           </div>
                                                                    </div>

                                                                </form>
                                                            </div> <!-- end card-->

                                                        </div>
                                                        
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div> <!-- end Col -->

                                                        <!-- end inbox-rightbar-->
                                        </div> <!-- fin del id -->
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script></script> © 2023 Desarrollo Grupo 6
                                <!-- <a href="#">Coderthemes</a>  -->
                            </div>

                            </div>
                        </div>
                    </div>
                </footer>

                   

          

</html>
</body>
                
                          