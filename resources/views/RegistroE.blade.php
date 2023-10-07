@extends('layouts.plantilla')

@section('title')
<title>Clinident / Gestion de Pacientes </title>
@endsection
@section('css-externo')

@endsection
@section('contenido')
<div class="main-wrapper" >
    <div class="page-wrapper" id="inicio" >
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3" style="padding-left: 1rem!important;">
                    <h4 class="page-title"  id="inicio-pacientes">Pacientes Registrados</h4>
                </div>
                <div class="col-sm-7 col-8 text-right m-b-30">
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-white"><img src="{{asset('assets/img/pdf.png')}}" style="width: 30px"></button>
                        <button class="btn btn-white"><i class="fa fa-print fa-lg"></i>Imprimir</button>
                    </div>
                </div>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> Gestion de Paciente</a></li>
                    <li class="breadcrumb-item"><a href="#">Registro Expediente</a></li>
                    
                </ol>
            </nav>
            <section>
                <div  class="col-sm-12 col-lg-12 text-right m-b-20">
                    <button title="Generar pdf" id="print" class="btn btn-primary float-right btn-rounded btn-press btn-add"><img src="{{asset('assets/img/pdf.png')}}" style="width: 20px"> </button>
                    
                    <div  class="col-sm-12 col-md-12 text-right m-b-20">
                        <button class="btn btn-primary float-right btn-rounded btn-press btn-add"><a href="{{route('AnadirP')}}" style="color: aliceblue"><i class="fa fa-plus"></i> Añadir</a></button>
                    </div>
               
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive"style="padding-left: .8rem;!important; padding-right: .5rem;!important;">
                            <table class="table table-border table-striped custom-table datatable mb-0">
                                <thead>
                                    <tr>
                                        <th>Doc. Identidad</th>
                                        <th>Nombre Completo</th>
                                        <th>Edad</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th >Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>000001</td>
                                        <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""><a href="{{asset('HistoriaC')}}" style="text-decoration: underline!important"> Jennifer Robinson</a></td>
                                        <td>35</td>
                                        <td>1545 Dorsey Ln NE, Leland, NC, 28451</td>
                                        <td>(207) 808 8863</td>
                                        <td>jenniferrobinson@example.com</td>
                                        <td >
                                            <li class="fa fa-edit" style="width: 1rem"></li>
                                            <li class="fa fa-trash-o" style="width: 1rem"></li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>000002</td>
                                        <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""><a href="{{asset('HistoriaC')}}"  style="text-decoration: underline!important"> Terry Baker</a></td>
                                        <td>63</td>
                                        <td>555 Front St #APT 2H, Hempstead, NY, 11550</td>
                                        <td>(376) 150 6975</td>
                                        <td>terrybaker@example.com</td>
                                        <td >
                                            <li class="fa fa-edit" style="width: 1rem"></li>
                                            <li class="fa fa-trash-o" style="width: 1rem"></li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>00003</td>
                                        <<td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""><a href="{{asset('HistoriaC')}}"  style="text-decoration: underline!important"> Kyle Bowman </a></td>
                                        <td>7</td>
                                        <td>5060 Fairways Cir #APT 207, Vero Beach, FL, 32967</td>
                                        <td>(981) 756 6128</td>
                                        <td>kylebowman@example.com</td>
                                        <td >
                                            <li class="fa fa-edit" style="width: 1rem"></li>
                                            <li class="fa fa-trash-o" style="width: 1rem"></li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>00004</td>
                                        <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""><a href="{{asset('HistoriaC')}}"  style="text-decoration: underline!important"> Marie Howard</a></td>
                                        <td>22</td>
                                        <td>3501 New Haven Ave #152, Columbia, MO, 65201</td>
                                        <td>(634) 09 3833</td>
                                        <td>mariehoward@example.com</td>
                                        <td >
                                            <li class="fa fa-edit" style="width: 1rem; display:inline-block"></li>
                                            <li class="fa fa-trash-o" style="width: 1rem; display:inline-block"></li>
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
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="assets/img/sent.png" alt="" width="50" height="46">
                    <h3>Are you sure want to delete this Patient?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   

</div>

@endsection

@section('js-externo')
    <script src="{{ asset('/assets/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.fullcalendar.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    <script src="{{ asset('/assets/js/modal.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>

@endsection
