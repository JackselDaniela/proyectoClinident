@extends('layouts.plantilla')

@section('title')
<title>Clinident / Gestion de Pacientes</title>
@endsection
@section('css-externo')
<link rel="stylesheet" href="assets/css/dentadura.css">
<link rel="stylesheet" href="assets/css/odontograma.css">

@endsection
@section('contenido')
<div class="page-wrapper" style="padding: 0 0.5rem; padding-top:4rem;">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-6">
                <h4 class="page-title" id="inicio">Historial Clinico</h4>
            </div>
            <!-- BOTON MODAL -->
        <div  class="col-sm-12 col-md-12 text-right m-b-20">
            <button id="openModal" class="btn btn-primary float-right btn-rounded btn-press" style="font-size:1.6rem;!important"><i class="fa fa-plus"></i> Añadir Tratamiento</button>
           
        </div>
     <!--/BOTON MODAL -->
            
     
        </div>
        <div class="row filter-row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-2 col-12">
                <div class="form-group form-focus">
                    <label class="focus-label">Doc. Identidad</label>
                    <input type="text" class="form-control floating">
                </div>
            </div>
                <a href="#" class="btn btn-success " style="width: 20rem!important; height: .5rem!important; border-radius: 3rem; font-size:1.4rem;!important"> Buscar Paciente </a>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable" style="font-size:1.4rem;!important">
                        <thead>
                            <tr>
                                <th>Doc.Identidad</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                                <th class="text-center">Estatus</th>
                                <th class="text-center">Exámenes</th>
                                <th class="text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>000123</td>
                                <td>Francisco</td>
                                <td>Jimenez</td>
                                <td>35</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            Paciente
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Activo</a>
                                            <a class="dropdown-item" href="#">Inactivo</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><a href="#" style="text-decoration: underline!important">Perfil 20- Paciente Francisco Jimenez</a></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-leave.html"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                            <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Reporte del paciente --}}
        <table class="table table-striped custom-table" style="font-size: 1.3rem; margin-top:.8rem">
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
                                    <input type="radio" name="alergia" class="form-check-input" checked disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="alergia" class="form-check-input" disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                    
                </tr>
                <tr>
                    <td>Alergia a Medicamento</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="Medicamento class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="Medicamento class="form-check-input" checked disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Tratamiento Medico Actual</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="tratamientoActual" class="form-check-input"  disabled>Si esta bajo tratamiento
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="tratamientoActual" class="form-check-input"  checked disabled>No Esta bajo tratamiento
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Está en Estado Gravidez</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gravidez" class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gravidez" class="form-check-input"  checked disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Ha experimentado Hemorragias</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="hemorragias" class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="hemorragias" class="form-check-input" checked  disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                </tr>
                <tr>
                    <td> Padece de Desmayos</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="desmayos"  required="" class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="desmayos" class="form-check-input"  checked disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                </tr>
                <tr>
                    <td> Padece de Asma</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="asma" class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="asma" class="form-check-input"  checked  disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Padece Diábetes</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="diabetes" class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="diabetes" class="form-check-input" checked  disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique Tipo"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Padece de Hipertension Arterial</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="presionArterial" class="form-check-input" disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="presionArterial" class="form-check-input" checked  disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                </tr>
                
                <tr>
                    <td>Padece de Epilepsia</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="epilepsia" class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="epilepsia" class="form-check-input"  checked disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;"  disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Padece de Cancer Actualmente</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="cancer" class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="cancer" class="form-check-input"   checked disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;"  disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Ha padecido de Cancer</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="cancer-2" class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="cancer-2" class="form-check-input"  checked  disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;"  disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Padece VIH</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="sida" class="form-check-input"  disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="sida" class="form-check-input"  checked  disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;"  disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Padece Enfermedad Inmunodeficiente</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="idh" class="form-check-input" disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="idh" class="form-check-input"  checked disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;" disabled></td>
                    
                    
                </tr>
                <tr>
                    <td>Fuma Actualmente</td>
                    <td>
                        <div class="form-group gender-select">
                            <label class="gen-label"></label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="fumador" class="form-check-input" disabled>Si
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="fumador" class="form-check-input" disabled>No
                                </label>
                            </div>
                    </td>
                    <td><input placeholder="Indique"type="text" style="border-style: hidden; text-align: center;"></td>
                    
                    
                </tr>
                
            </tbody>
        </table>
    </div>
    
</div>
<!-- MODAL -->
<div id="modal-tratamiento" class="modal-container" style="margin: 5rem 0; padding: 5rem 0; overflow-y:hidden; justify-content: center!important;">
    <div class="modal-content ">
        
            <div class="row">
                <div class="col-lg-8 offset-lg-2" style="text-align: center; margin: 0px!important;" >
                        <ul style="list-style:none; display:flex; padding: 2rem; justify-content:space-between">
                            <li>
                                <h1 >Tratamientos</h1> 
                            </li>
                            <li>
                                <button type="button" class="close" id="close-btn" data-dismiss="modal" style="margin-right:-15rem">&times;</button>
                            </li>
                            
                            
                        </ul>
                        <ul style="list-style:none; display:flex; padding: 2rem; justify-content:space-between">
                            <li>
                                <h3 style="margin-bottom:-3.5rem; width:max-content;">Seleccione la Pieza</h3>
                            </li>
                        </ul>
                            
                            
                        
                    </div>
                           
                </div>
                <div class="contenedor-dentadura" id="dentadura-completa">
                    <div class="row" style="min-height: 100%!important;">
                         <!-- Maxilar superior izq -->
                        <img class="dentadura" src="assets/img/boca/dentadura.png" alt="">
                        <a id="p11"  title="Pieza 11" ><img class="p11 pieza" src="assets/img/boca/piezas/11pieza.png" alt=""></a>
                        <a id="p12" title="Pieza 12"><img class="p12 pieza" src="assets/img/boca/piezas/12pieza.png" alt=""></a>
                        <a id="p13" title="Pieza 13"><img class="p13 pieza" src="assets/img/boca/piezas/13pieza.png" alt=""></a>
                        <a id="p14" title="Pieza 14"><img class="p14 pieza" src="assets/img/boca/piezas/14pieza.png" alt=""></a>
                        <a id="p15" title="Pieza 15"><img class="p15 pieza" src="assets/img/boca/piezas/15pieza.png" alt=""></a>
                        <a id="p16" title="Pieza 16"><img class="p16 pieza" src="assets/img/boca/piezas/16pieza.png" alt=""></a>
                        <a id="p17" title="Pieza 17"><img class="p17 pieza" src="assets/img/boca/piezas/17pieza.png" alt=""></a>
                        <a id="p18" title="Pieza 18"><img class="p18 pieza" src="assets/img/boca/piezas/18pieza.png" alt=""></a>
                        
                        <!-- Maxilar superior derecho -->
                        <a id="p21" title="Pieza 21"><img class="p21 pieza" src="assets/img/boca/piezas/21pieza.png" alt=""></a>
                        <a id="p22" title="Pieza 22"><img class="p22 pieza" src="assets/img/boca/piezas/22pieza.png" alt=""></a>
                        <a id="p23" title="Pieza 23"><img class="p23 pieza" src="assets/img/boca/piezas/23pieza.png" alt=""></a>
                        <a id="p24" title="Pieza 24"><img class="p24 pieza" src="assets/img/boca/piezas/24pieza.png" alt=""></a>
                        <a id="p25" title="Pieza 25"><img class="p25 pieza" src="assets/img/boca/piezas/25pieza.png" alt=""></a>
                        <a id="p26" title="Pieza 26"><img class="p26 pieza" src="assets/img/boca/piezas/26pieza.png" alt=""></a>
                        <a id="p27" title="Pieza 27"><img class="p27 pieza" src="assets/img/boca/piezas/27pieza.png" alt=""></a>
                        <a id="p28" title="Pieza 28"><img class="p28 pieza" src="assets/img/boca/piezas/28pieza.png" alt=""></a>  
                       <!-- Maxilar inferior izq -->
            
                       <a id="p41" title="Pieza 41"><img class="p41 pieza-2" src="assets/img/boca/piezas/41pieza.png" alt=""></a>
                       <a id="p42" title="Pieza 42"><img class="p42 pieza-2" src="assets/img/boca/piezas/42pieza.png" alt=""></a>
                       <a id="p43" title="Pieza 43"><img class="p43 pieza-2" src="assets/img/boca/piezas/43pieza.png" alt=""></a>
                       <a id="p45" title="Pieza 45"><img class="p45 pieza-2" src="assets/img/boca/piezas/45pieza.png" alt=""></a>
                       <a id="p44" title="Pieza 44"><img class="p44 pieza-2" src="assets/img/boca/piezas/44pieza.png" alt=""></a>
                       <a id="p46" title="Pieza 46"><img class="p46 pieza-2" src="assets/img/boca/piezas/46pieza.png" alt=""></a>
                       <a id="p47" title="Pieza 48"><img class="p48 pieza-2" src="assets/img/boca/piezas/48pieza.png" alt=""></a>
                       <a id="p48" title="Pieza 47"><img class="p47 pieza-2" src="assets/img/boca/piezas/47pieza.png" alt=""></a>
                      
                       <!-- Maxilar inferior derecho -->
                       <a id="p31" title="Pieza 31"><img class="p31 pieza-2" src="assets/img/boca/piezas/31pieza.png" alt=""></a>
                       <a id="p32" title="Pieza 32"><img class="p32 pieza-2" src="assets/img/boca/piezas/32pieza.png" alt=""></a>
                       <a id="p33" title="Pieza 33"><img class="p33 pieza-2" src="assets/img/boca/piezas/33pieza.png" alt=""></a>
                       <a id="p34" title="Pieza 34"><img class="p34 pieza-2" src="assets/img/boca/piezas/34pieza.png" alt=""></a>
                       <a id="p35" title="Pieza 35"><img class="p35 pieza-2" src="assets/img/boca/piezas/35pieza.png" alt=""></a>
                       
                       <a id="p37" title="Pieza 37"><img class="p37 pieza-2" src="assets/img/boca/piezas/37pieza.png" alt=""></a>
                       <a id="p36" title="Pieza 36"><img class="p36 pieza-2" src="assets/img/boca/piezas/36pieza.png" alt=""></a>
                       <a id="p38" title="Pieza 38"><img class="p38 pieza-2" src="assets/img/boca/piezas/38pieza.png" alt=""></a>
                      
            
                       
                    </div>
                    <div class="col-lg-8 offset-lg-2">  
                        <div class="m-t-20 text-center">
                            <button id="close-btn" class="btn btn-primary submit-btn"><a href=#inicio style="list-style: none; color: aliceblue;">Guardar</a></button>
                        </div>
                        <br>
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
                                <a href="chat.html">Ver todos los mendajes</a>
                            </div>
                        </div>
                    </div>
                
                
    
            </div>
</div>
<!-- /MODAL -->

<!-- Modal piezas -->

        <div id="modal-pieza" class="modal-container" style="padding:5rem 0; overflow:hidden;">
            <div class="modal-content " style="width: 60rem!important; padding-top: 2rem; margin-top:2rem;">
                <div class="row" style="margin-top: 2rem">
                    <div class="col-lg-8 offset-lg-2" style="margin: 0 10rem!important; padding:5rem 4rem 1rem 6rem;  ">
                        
                        <form>
                            <div class="floating" >
                            
                                <ul class="user-det-list" style="font-size: 1.5rem!important; ">                        
                                      
                                    <button type="button" class="close" id="closePieza" data-dismiss="modal" style="padding-left: -2rem">&times;</button>
                                        
                                                               
                                   <img src="assets/img/boca/dentadura.png" style="width: 10rem!important;" alt="">
                                   <h1 class="user-name m-t-10 mb-0"> Pieza </h1>
                                                                   
       
                                                               
                                                               
                                   <li style="display: flex">
                                    <button class="btn-white modal-btn" style="margin: .5rem!important; border: 0px!important;border-radius: 50px!important; background-color: rgb(205, 167, 240)!important; padding: .8rem!important;">Restauracion</button>
                                    <button class="btn-white modal-btn" style="margin: .5rem!important; border: 0px!important;border-radius: 50px!important; background-color: rgb(205, 167, 240)!important; padding: .8rem!important;">Fractura</button>
                                    <button class="btn-white modal-btn" style="margin: .5rem!important; border: 0px!important;border-radius: 50px!important; background-color: rgb(205, 167, 240)!important; padding: .8rem!important;">Extracción</button>
                                    <button class="btn-white modal-btn" style="margin: .5rem!important; border: 0px!important;border-radius: 50px!important; background-color: rgb(205, 167, 240)!important; padding: .8rem!important;">Endodoncia</button>
                                    <button class="btn-white modal-btn" style="margin: .5rem!important; border: 0px!important;border-radius: 50px!important; background-color: rgb(205, 167, 240)!important; padding: .8rem!important;">Prótesis</button>
                                     
                                    </li>
                                                                   
                                                               
                                                               
                                                                   
                                    <div class="contenedor-odontograma"  id="odontograma">
                                        <div class="row">
                                             <img class="odontograma" src="assets/img/boca/piezas/1x/Recurso 10pieza.png" alt="">
                                             <img src="assets/img/boca/piezas/derechapieza.png" alt="" class="parte-o parte-odontograma">
                                            <img src="assets/img/boca/piezas/inferiorpieza.png" alt="" class="parte-o parte-odontograma-1">
                                            <img src="assets/img/boca/piezas/izquierdapieza.png" alt="" class="parte-o parte-odontograma-2">
                                            <img src="assets/img/boca/piezas/superiorpieza.png" alt="" class="parte-o parte-odontograma-3">
                                            <img src="assets/img/boca/piezas/nucleopieza.png" alt="" class="parte-o parte-odontograma-4">
                                                                          
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                                                   
                                                               
                                                               
                                    <textarea name="pieza-tratamiento" id="p-tratamiento" cols="50" rows="10" style="margin-left: 4rem;"></textarea>
                                    <br><br>
                                                             
                                    <br>
                                    <br>
                                                                   
                                    <button type="submit" class="btn btn-primary submit-btn"><a href=#dentadura-completa style="list-style: none; color: aliceblue;">Guardar</a></button>
                                    <br>                           
                                </ul>
                            </div>
                        </form>      
                    </div>
                </div>
            </div> -->
   
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
<!-- Modal piezas -->
<div id="delete_approve" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Leave Request?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-externo')
<script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fullcalendar.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/js/modal.js') }}"></script>
@endsection
