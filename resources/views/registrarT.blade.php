@extends('layouts.plantilla')

@section('title')
<title>Clinident / Registrar Tratamiento</title>
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
    <script>
        function cerrar(){
        alert('Esta seguro de que desea cerrar?');
    }
    </script>
@endsection
@section('contenido')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Tratamientos de la Clinica</h4>
            </div>
            

        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tratamiento</a></li>
                <li class="breadcrumb-item"><a href="#">Registrar</a></li>
            </ol>
        </nav>
        <!-- BOTON MODAL -->
        
     <!--/BOTON MODAL -->
     <section >
        <div  class="col-sm-12 col-md-12 text-right m-b-20">
            <button id="openModal" class="btn btn-primary float-right btn-rounded btn-press btn-add" ><i class="fa fa-plus"></i> Añadir</button>
        </div>
        
        <div class="row filter-row">
            <div class="col-sm-6 col-md-6">
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group">
                            
                            <input class="form-control" placeholder="Codigo de Tratamiento" type="text">
                            <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" style="border-radius: .8rem"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group form-focus select-focus">
                    <label class="focus-label">Especialidad</label>
                    <select class="select floating">
                        <option></option>
                        <option>Endodoncia</option>
                        <option>Ortodoncia</option>
                        <option>Tecnico Dental</option>
                        <option>Odontologia General</option>
                        <option>Maxilo-Facial</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>Cod.</th>
                                <th style="min-width:200px;">Nombre Tratamiento</th>
                                <th>Costo</th>
                                <th>Fecha añadido</th>
                                <th >Especialidad</th>
                                <th >Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>OG-0001</td>
                                <td>
                                     <img width="28" height="28" src="assets/img/tratamiento.png" class="rounded-circle" alt="">  <i class="fa-regular fa-notes-medical"></i><h2>Extraccion de piezas</h2>
                                </td>
                                <td>100$</td>
                                <td>7 May 2015</td>
                                <td>
                                    <span class="custom-badge status-green">Od. General</span>
                                </td>
                                <td >
                                    <li class="fa fa-edit" style="width: 2rem"></li>
                                    <li class="fa fa-trash-o" style="width: 2rem"></li>
                                </td>
                            </tr>
                            <tr>
                                <td>EN-0001</td>
                                <td>
                                    <img width="28" height="28" src="assets/img/tratamiento.png" class="rounded-circle" alt="">  <i class="fa-regular fa-notes-medical"></i><h2>Trat. Conducto</h2>
                               </td>
                               <td>150$</td>
                                <td>1 Ene 2013</td>
                                <td>
                                    <span class="custom-badge status-blue">Endodoncia</span>
                                </td>
                                <td >
                                    <li class="fa fa-edit" style="width: 2rem"></li>
                                    <li class="fa fa-trash-o" style="width: 2rem"></li>
                                </td>
                            </tr>
                            <tr>
                                <td>OR-0001</td>
                                <td>
                                    <img width="28" height="28" src="assets/img/tratamiento.png" class="rounded-circle" alt="">  <i class="fa-regular fa-notes-medical"></i><h2> Brackets </h2>
                               </td>
                               <td>180$</td>
                                <td>27 Dic 2017</td>
                                <td>
                                    <span class="custom-badge status-grey">Ortodoncia</span>
                                </td>
                                <td >
                                    <li class="fa fa-edit" style="width: 2rem"></li>
                                    <li class="fa fa-trash-o" style="width: 2rem"></li>
                                </td>
                            </tr>
                            <tr>
                                <td>OG-0002</td>
                                <td>
                                     <img width="28" height="28" src="assets/img/tratamiento.png" class="rounded-circle" alt="">  <i class="fa-regular fa-notes-medical"></i><h2>Blanqueamiento</h2>
                                </td>
                                <td>100$</td>
                                <td>7 May 2015</td>
                                <td>
                                    <span class="custom-badge status-green">Od. General</span>
                                </td>
                                <td >
                                    <li class="fa fa-edit" style="width: 2rem"></li>
                                    <li class="fa fa-trash-o" style="width: 2rem"></li>
                                </td>
                            </tr>
                            <tr>
                                <td>OG-0003</td>
                                <td>
                                     <img width="28" height="28" src="assets/img/tratamiento.png" class="rounded-circle" alt="">  <i class="fa-regular fa-notes-medical"></i><h2>Limpieza</h2>
                                </td>
                                <td>100$</td>
                                <td>7 jul 2017</td>
                                <td>
                                    <span class="custom-badge status-green">Od. General</span>
                                </td>
                                <td >
                                    <li class="fa fa-edit" style="width: 2rem"></li>
                                    <li class="fa fa-trash-o" style="width: 2rem"></li>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

     </section>

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
<div id="delete_employee" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Employee?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- MODAL -->
        <div id="modal-tratamiento" class="modal-container" style="padding: 5rem 0">
            <div class="modal-content">
                    <div class="content">
                        <div class="row" style="padding: 2rem 0; justify-content:center">
                            <ul style="display: flex; ;">
                                
                                    <div class="col-lg-7 offset-lg-2" style="font-size: 2rem;!important">
                                        <h4 class="page-title"> Añadir Nuevo Tratamiento</h4> 
                                    </div>

                                
                               
                                    <div class="col-lg-2 offset-lg-2" style="margin-right:-2rem">
                                        <button   onclick="cerrar()" class="close" id="close-btn" data-dismiss="modal">&times;</button>  
                                    </div>

                               
                                
                            </ul>
                        </div>
                        <div class="row">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <form action="{{route('RegistrarT.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nombre Tratamiento<span class="text-danger">*</span></label>
                                                <input class="form-control" name="nom_tratamiento" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Costo</label>
                                                <input class="form-control"  name="costo_tratamiento" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Codigo <span class="text-danger">*</span></label>
                                                <input class="form-control" value="cod" name="codigo_tratamiento" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Fecha <span class="text-danger">*</span></label>
                                                
                                                    <input class="form-control" name="fecha_añadido" type="datetime-local" required>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group" required>
                                            <label class="display-block">Estatus</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="estatus" id="employee_active" value="option1" >
                                                <label class="form-check-label" for="employee_active">
                                                Activo
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="estatus" id="employee_inactive" value="option2">
                                                <label class="form-check-label" for="employee_inactive">
                                                Inactivo
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Especialidad</label>
                                                <select class="select" name="especialidad" required>
                                                    <option>Endodoncia</option>
                                                    <option>Ortodoncia</option>
                                                    <option>Tecnico Dental</option>
                                                    <option>Odontologia General</option>
                                                    <option>Maxilo-Facial</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary submit-btn">Añadir Tratamiento</button>
                                    <br>
                                </form>
                            </div>
                        </div>
                        
                        
                        <br>
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
                                <a href="chat.html">Ver todos los mendajes</a>
                            </div>
                        </div>
                    </div>
                
                
    
            </div>
        </div>
        <!-- /MODAL -->

@endsection

@section('js-externo')
<script src="{{ asset('/assets/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.fullcalendar.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/js/modal.js') }}"></script>
<script src="{{ asset('/assets/js/popper.min.js') }}"></script>


@endsection
