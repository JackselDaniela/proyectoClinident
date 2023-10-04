@extends('layouts.plantilla')

@section('title')
<title> Clinident </title>
@endsection
@section('css-externo')

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->

@endsection
@section('contenido')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg1"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>98</h3>
                        <span class="widget-title1">Doctores</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>1072</h3>
                        <span class="widget-title2">Pacientes</i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg3"><i class="fa fa-medkit"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>72</h3>
                        <span class="widget-title3">Insumos faltantes</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>618</h3>
                        <span class="widget-title4">Ruta Tratamientos</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-title">
                            <h4>Total Pacientes</h4>
                            <span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% más alto que el mes pasado</span>
                        </div>	
                        <canvas id="linegraph"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-title">
                            <h4>Insumos más utilizados</h4>
                            <div class="float-right">
                                <ul class="chat-user-total">
                                    <li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
                                    <li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li>
                                </ul>
                            </div>
                        </div>	
                        <canvas id="bargraph"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Actualización de perfil</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="chat-profile-img">
                            <div class="edit-profile-img">
                                <img src="assets/img/doctor-thumb-04.jpg" alt="">
                                <span class="change-img">Cambiar Imagen</span>
                            </div>
                            <h3 class="user-name m-t-10 mb-0">Cristian López</h3>
                            <small class="text-muted">Ortodoncista</small>
                            <a href="edit-profile.html" class="btn btn-primary edit-btn"><i class="fa fa-pencil"></i></a>
                        </div>
                        <div class="chat-profile-info">
                            <ul class="user-det-list">
                                <li>
                                    <span>Usuario:</span>
                                    <span class="float-right text-muted">@cristian_22</span>
                                </li>
                                <li>
                                    <span>Email:</span>
                                    <span class="float-right text-muted">cristianlop@gmail.com</span>
                                </li>
                                <li>
                                    <span>Télefono:</span>
                                    <span class="float-right text-muted"> 770-889-6484</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card member-panel">
                    <div class="card-header bg-white">
                        <h4 class="card-title mb-0">Doctores Activos</h4>
                    </div>
                    <div class="card-body">
                        <ul class="contact-list">
                            <li>
                                <div class="contact-cont">
                                    <div class="float-left user-img m-r-10">
                                        <a href="profile.html" title="John Doe"><img src="assets/img/doctor-thumb-06.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                    </div>
                                    <div class="contact-info">
                                        <span class="contact-name text-ellipsis">John Gomez</span>
                                        <span class="contact-date">Patología maxilofacial</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-cont">
                                    <div class="float-left user-img m-r-10">
                                        <a href="profile.html" title="Richard Miles"><img src="assets/img/doctor-thumb-01.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                    </div>
                                    <div class="contact-info">
                                        <span class="contact-name text-ellipsis">Richard Perez</span>
                                        <span class="contact-date">Ortodoncia</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-cont">
                                    <div class="float-left user-img m-r-10">
                                        <a href="profile.html" title="John Doe"><img src="assets/img/doctor-thumb-08.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                    </div>
                                    <div class="contact-info">
                                        <span class="contact-name text-ellipsis">Daniela Gonzalez</span>
                                        <span class="contact-date">Cirugía Oral</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-cont">
                                    <div class="float-left user-img m-r-10">
                                        <a href="profile.html" title="Richard Miles"><img src="assets/img/doctor-thumb-02.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                    </div>
                                    <div class="contact-info">
                                        <span class="contact-name text-ellipsis">Laura Mendoza</span>
                                        <span class="contact-date">Odontologia General</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-cont">
                                    <div class="float-left user-img m-r-10">
                                        <a href="profile.html" title="John Doe"><img src="assets/img/doctor-thumb-05.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                    </div>
                                    <div class="contact-info">
                                        <span class="contact-name text-ellipsis">Josefin Duran</span>
                                        <span class="contact-date">Ortodoncia</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-cont">
                                    <div class="float-left user-img m-r-10">
                                        <a href="profile.html" title="Richard Miles"><img src="assets/img/doctor-thumb-07.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                    </div>
                                    <div class="contact-info">
                                        <span class="contact-name text-ellipsis">Patricia Miles</span>
                                        <span class="contact-date">Endodoncia</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <a href="doctors.html" class="text-muted">Ver todos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Próximas Citas</h4> <a href="appointments.html" class="btn btn-primary float-right">Ver todas</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="d-none">
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Timing</th>
                                        <th class="text-right">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">A</a>
                                            <h2><a href="profile.html">Anastasia Galaviz</a></h2>
                                        </td>                 
                                        <td>
                                            <h5 class="time-title p-0">Cita con</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Hora</h5>
                                            <p>8.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Comenzar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz</a></h2>
                                        </td>                 
                                        <td>
                                            <h5 class="time-title p-0">Cita con</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Hora</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Comenzar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">C</a>
                                            <h2><a href="profile.html">Carlos Galaviz </h2>
                                        </td>                 
                                        <td>
                                            <h5 class="time-title p-0">Cita con</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Hora</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Comenzar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">A</a>
                                            <h2><a href="profile.html">Ana Galaviz </a></h2>
                                        </td>                 
                                        <td>
                                            <h5 class="time-title p-0">Cita con</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Hora</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Comenzar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">Bernardo Galaviz</h2>
                                        </td>                 
                                        <td>
                                            <h5 class="time-title p-0">Cita con</h5>
                                            <p>Dr. Cristina Groves</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Hora</h5>
                                            <p>7.00 PM</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Comenzar</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Nuevos Pacientes </h4> <a href="patients.html" class="btn btn-primary float-right">Ver todos</a>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table mb-0 new-patient-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="assets/img/user-02.jpg" alt=""> 
                                            <h2>John</h2>
                                        </td>
                                        <td>Johndoe21@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="assets/img/user-03.jpg" alt=""> 
                                            <h2>Richard</h2>
                                        </td>
                                        <td>Richard123@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="assets/img/user-04.jpg" alt=""> 
                                            <h2>Villiam</h2>
                                        </td>
                                        <td>Viliamd123@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="assets/img/user-05.jpg" alt=""> 
                                            <h2>Martin</h2>
                                        </td>
                                        <td>Martin123@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="assets/img/user-06.jpg" alt=""> 
                                            <h2>Sofia</h2>
                                        </td>
                                        <td>Sofi123@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="assets/img/patient-thumb-01.jpg" alt=""> 
                                            <h2>Vanessa</h2>
                                        </td>
                                        <td>Vane123@yahoo.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/proce.png" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title"><a href="blog-details.html">Tratamientos</a></h2>
                        <p>Registra los tratamientos que realiza la clinica al paciente con sus costos</p>
                        <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right"></i> Ver como funciona</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/pro.png" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Agendar Cita</a></h3>
                        <p>Agenda la cita de los pacientes y lleva un control de todas tus citas</p>
                        <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right"></i> Ver como funciona</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/proce.png" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Gestión de Paciente (Parte 1)</a></h3>
                        <p>Registra a los pacientes generando su expediente clinico</p>
                        <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right"></i> Ver como funciona</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/proce.png" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Gestión de Paciente (Parte 2)</a></h3>
                        <p>Lleva el control del historial clinico con la ruta de tratamiento por paciente</p>
                        <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right"></i> Ver como funciona</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/pro.png" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Gestión de Insumos</a></h3>
                        <p>Registra los insumos, una nueva carga de producto y actualización de stock</p>
                        <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right"></i>Ver como funciona</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/proce.png" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Calculadora de Honorarios</i></a></h3>
                        <p>Visualización de las ganancias del doctor y la clinica porcentajes</p>
                        <a href="blog-details.html" class="read-more"><i class="fa fa-long-arrow-right"></i> Ver como funciona</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="notification-box">
        <div class="msg-sidebar notifications msg-noti">
            <div class="topnav-dropdown-header">
                <span>Messages</span>
            </div>
            <div class="drop-scroll msg-list-scroll" id="msg_list">
                <ul class="list-box">
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Richard Miles </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item new-message">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">John Doe</span>
                                    <span class="message-time">1 Aug</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Tarah Shropshire </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Mike Litorus</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Catherine Manseau </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">D</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Domenic Houston </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">B</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Buster Wigton </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Rolland Webber </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Claire Mapes </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Melita Faucher</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Jeffery Lalor</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">L</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Loren Gatlin</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Tarah Shropshire</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="chat.html">See all messages</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-externo')
<div class="sidebar-overlay" data-reff=""></div>
<script src="{{ asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.fullcalendar.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/js/modal.js') }}"></script>
<script src="{{ asset('/assets/js/popper.min.js') }}"></script>
<script src="assets/js/Chart.bundle.js"></script>
<script src="assets/js/chart.js"></script>


@endsection
