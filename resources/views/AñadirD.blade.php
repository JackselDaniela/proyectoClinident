@extends('layouts.plantilla')

@section('title')
<title>Clinident / Doctores</title>
@endsection
@section('css-externo')

@endsection
@section('contenido')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title" style="padding-left: -10rem; margin-left:-10rem">Añadir Doctor</h4>
            </div>
            <section style="padding: 1rem 1rem; background-color: rgba(23, 12, 235, 0.2)">
                <h4 class=" text-center" style="padding: 2rem 0;color:aliceblue">Registrar Doctor</h4>
            
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('AnadirD.store')}}" method="POST">
                        @csrf
                        <div class="row" style="color: aliceblue">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{-- Persona --}}
                                    <label>Doc.Identidad <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Ingrese Doc. Identidad" name="doc_identidad" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nombre <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Ingrese el Nombre del Paciente" name="nombre" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input class="form-control" placeholder="Ingrese el Apellido" name="apellido" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Fecha de nacimiento</label>
                                    <div class="cal-icon">
                                        <input type="text" name="fecha_nacimiento" placeholder="Ingrese la fecha de Nacimiento" class="form-control datetimepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ocupación <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Ingrese La Ocupacion" name="ocupacion" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Foto</label>
                                    <div class="profile-upload">
                                        <div class="upload-img">
                                            <img alt="" src="assets/img/user.jpg">
                                        </div>
                                        <div class="upload-input">
                                            <input type="file" name="foto" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- /Persona --}}
                            {{-- Genero --}}
                            <div class="col-sm-6">
                                <div class="form-group gender-select">
                                    <label class="gen-label">Genero</label>
                                    <select class="select" name="genero" id="genero" required>
                                        <option value="masculino"> Masculino</option>
                                        <option value="femenino"> Femenino</option>
                                        <option value="no_binario"> No Binario</option>
                                        <option value="otros"> Prefiero no decirlo</option>
                                    </select>
                                    
                                </div>
                            </div>
                            {{-- /Genero --}}

                            {{-- Especialidad --}}
                            <div class="col-sm-6">
                                <div class="form-group gender-select">
                                    <label class="gen-label">Especialidad</label>
                                    <select class="select" name="especialidad" id="especialidad" required>
                                        <option value="Endodoncia"> Endodoncia</option>
                                        <option value="Ortodoncia"> Ortodoncia</option>
                                        <option value="Maxilofacial"> Maxilofacial</option>
                                        <option value="Od_general"> Od. General</option>
                                        <option value="tecnico_dental"> Tecnico dental</option>
                                    </select>
                                    
                                </div>
                            </div>

                            {{-- /Especialidad --}}
                            
                            {{-- Datos Ubicacion --}}
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input type="text" placeholder="¿En qué estado Vive?" name="estado" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Municipio</label>
                                            <input type="text" name="municipio" placeholder="¿En qué municipio Vive?" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Ciudad</label>
                                            <input type="text" name="ciudad" placeholder="¿En qué ciudad Vive?" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Parroquia</label>
                                            <input type="text" name="parroquia" placeholder="¿En qué Parroquia Vive?" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input type="text" name="direccion" placeholder="¿Cúal es su Dirección?" class="form-control ">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="number" name="telefono" placeholder="Indique su Numero Principal" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Correo <span class="text-danger">*</span></label>
                                            <input class="form-control" name="correo" placeholder="Indique su correo" type="email">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            {{--/ Datos Ubicacion --}}
    
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input class="form-control" placeholder="Introduzca Contraseña " type="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirmar Contraseña</label>
                                    <input class="form-control" placeholder="Confirme su contraseña"  type="password">
                                </div>
                            </div>
                         </div>
                        
                           
                            <div class="row">
                        <form>
                                                    
                                                </div>
                                                <div class="col-lg-8 offset-lg-2">
                                                
                                                    <div class="m-t-20 text-center">
                                                        <button  type="submit" class="btn btn-primary submit-btn" style="list-style: none; color: aliceblue;">Registrar Paciente</button>
                                                    </div>
                                                </div>
            
                                            </form>
                                            
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
                                            <a href="chat.html">Ver todos los mendajes</a>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                    </form>
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

            </section>
         
</div>
@endsection

@section('js-externo')
<div class="sidebar-overlay" data-reff=""></div>
<script src="{{ asset('/assets/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.fullcalendar.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/js/modal.js') }}"></script>
<script src="{{ asset('/assets/js/popper.min.js') }}"></script>
@endsection
