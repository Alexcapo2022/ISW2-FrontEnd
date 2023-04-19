<!DOCTYPE html>
<html lang="en">    

<head>  
        
          
        <meta charset="utf-8" />
        <title>ESTUDIANDO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico"> -->
     
       

        <!--nuevos-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


        


        <!-- Agregue esto en la sección head del documento HTML -->
        <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
        
        <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script> -->
        <!-- <script src="ruta/al/archivo/sweetalert.min.js"></script>         -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


        <link href="<?= base_url(); ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />


        <!-- plugin css -->
        <link href="<?= base_url(); ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap css -->
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="<?= base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="<?= base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <!-- <link href="<?= base_url(); ?>assets/css/style.min.css" rel="stylesheet" type="text/css" /> -->

        <!-- Datatables CSS -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/> -->



        <!-- Head js -->
        <script src="<?= base_url(); ?>assets/js/head.js"></script>

    </head>

    <!-- body start -->
    <body data-theme="light" data-layout-mode="horizontal" data-topbar-color="dark" data-menu-position="fixed">

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">

                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
                   
    
                    <!-- LOGO -->
                    <div class="logo-box logo-margen">
                        <a href="activo">
                            <span class="logo-sm">
                                <img src="<?= base_url(); ?>assets/images/logoescuela2.jpg" alt="" height="70" width="100px">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                        </a>
                    </div>


       

<!-- Servidesk -->


<ul class="list-unstyled topnav-menu topnav-menu-left m-0">

<li class="nav-item dropdown header-profile">
        <a class="nav-link"  data-toggle="dropdown">
            <img src="<?= base_url(); ?>assets/images/male.gif" alt="" height="50" style="margin-right: 10px;">
            <span><strong><label id="" style="color: white;"> Hola, Patrick</label></strong></span>

            <div class="header-info">
                <!-- <span id="tipo_ls">DESARROLLO</span> -->
            </div>
        </a>
    </li>
    
    <li>
        <button class="button-menu-mobile waves-effect waves-light">
            <i class="fe-menu"></i>
        </button>
    </li>

    <li class="dropdown d-none d-xl-block">
        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            Servicios
            <i class="mdi mdi-chevron-down"></i> 
        </a>

        <div class="dropdown-menu">
            <!-- item-->
            <a href="<?php echo base_url('componente') ?>" class="dropdown-item">
                <i class="ti-headphone"></i> &nbsp;
                <span>Actividades Brindadas</span>
            </a>

            <!-- item-->
            <a href="<?php echo base_url('asignacionusuarios') ?>" class="dropdown-item">
                <i class="fe-user-check"></i> &nbsp;
                <span>Revision</span>
            </a>
        </div>
    </li>

    <li class="dropdown d-none d-xl-block">
        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            Reportes
            <i class="mdi mdi-chevron-down"></i> 
        </a>

        <div class="dropdown-menu">
            <!-- item-->
            <a href="<?php echo base_url('reporte') ?>" class="dropdown-item">
                <i class="mdi mdi-archive-arrow-down"></i> &nbsp;
                <span>Generar Reporte</span>
            </a>
        </div>
    </li>


</ul>





</div>
</div> <!-- end Topbar -->

          