@extends('layouts.plantilla')

@section('title')
<title>Clinident / Añadir Paciente</title>
@endsection
@section('css-externo')

@endsection
@section('contenido')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title" style="padding-left: -10rem; margin-left:-10rem">Añadir Paciente</h4>
            </div>
            
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> Gestion de Paciente</a></li>
                <li class="breadcrumb-item"><a href="#">Registro Expediente</a></li>
                <li class="breadcrumb-item"><a href="#">Añadir Paciente</a></li>
            </ol>
        </nav>
        <section >
            <div class="col-lg-8 offset-lg-2">
                <h4 class=" text-center" style="padding: 2rem 0;">Registrar Expediente</h4>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('AnadirP.store')}}" method="POST">
                        @csrf
                        <div class="row" >
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
    
    
                            {{-- Genero --}}
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
                                <div class="col-lg-8 offset-lg-2">
                                                        <h4 class=" text-center" style="padding: 2rem 0; color:aliceblue">Antecedentes Medicos</h4>
            
                                                    </div>
                                                    
                                                    <table class="table table-striped custom-table">
                                                        <thead>
                                                            <tr>
                                                                <th> Condicion </th>
                                                                <th>  </th>
                                                                <th> Descripcion </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Alergia Penicilina</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="alergia_penicilina" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="alergia_penicilina" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique metodo alternativo usado" type="text" name="desc_alergia_p"style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Alergia a Medicamento</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name='alergia_medicamento' class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name='alergia_medicamento' class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique medicamento y/o componentes" type="text" name="desc_alergia_m" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Tratamiento Medico Actual</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="trat_actual" class="form-check-input" required>Si esta bajo tratamiento
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="trat_actual" class="form-check-input">No Esta bajo tratamiento
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique tipo de tratamiento y medicamentos" type="text" name="desc_trat_actual" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Está en Estado Gravidez</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="gravidez" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="gravidez" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique etapa de Gravidez" type="text" name="desc_gravidez" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Ha experimentado Hemorragias</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="hemorragia" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="hemorragia" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique motivos" type="text" name="desc_hemorragia" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td> Padece de Desmayos</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="desmayos"  required="" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="desmayos" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique contexto que provoca desmayos" type="text" name="desc_desmayos" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td> Padece de Asma</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="asma" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="asma" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique serveridad" type="text" name="desc_asma" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Padece Diábetes</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="diabetes" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="diabetes" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique Tipo"type="text" name="desc_diabetes" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Padece de Hipertension Arterial</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="hipertension" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="hipertension" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Ultimo registro de tension" type="text" name="desc_hipertension" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>Padece de Epilepsia</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="epilepsia" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="epilepsia" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique motivos y frecuencia"type="text" name="desc_epilepsia" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Padece de Cancer Actualmente</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="cancer_actual" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="cancer_actual" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique Tipo de Cancer"type="text" name="desc_cancer_actual" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Ha padecido de Cancer</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="cancer_pasado" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="cancer_pasado" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Indique tipo de Cancer"type="text" name="dvihcancer_pasado" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Padece VIH</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="vih" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="vih" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Fecha de prueba  positiva " type="text" name="desc_vih" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Padece Enfermedad Inmunodeficiente</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="inmunodeficiente" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="inmunodeficiente" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Nombre de la condicion"type="text" name="desc_inmunodeficiente" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Fuma Actualmente</td>
                                                                <td>
                                                                    <div class="form-group gender-select">
                                                                        <label class="gen-label"></label>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="fumador" class="form-check-input" required>Si
                                                                            </label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" name="fumador" class="form-check-input">No
                                                                            </label>
                                                                        </div>
                                                                </td>
                                                                <td><input placeholder="Desde Hace Cuanto?"type="text" name="desc_fumador" style="border-style: hidden; text-align: center;"></td>
                                                                
                                                                
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                     <!-- /Medical Information -->
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
