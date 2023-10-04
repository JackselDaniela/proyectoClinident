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
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Doctores</h4>
            </div>
            {{-- BOTON MODAL --}}
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{asset('AnadirD')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Añadir Doctor</a>
            </div>
            {{-- BOTON MODAL --}}
        </div>
        <div class="row doctor-grid">
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-03.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Cristina Groves</a></h4>
                    <div class="doc-prof">Gynecologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-07.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Marie Wells</a></h4>
                    <div class="doc-prof">Psychiatrist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-04.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Henry Daniels</a></h4>
                    <div class="doc-prof">Cardiologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-11.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Mark Hunter</a></h4>
                    <div class="doc-prof">Urologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-12.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Michael Sullivan</a></h4>
                    <div class="doc-prof">Ophthalmologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-02.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Linda Barrett</a></h4>
                    <div class="doc-prof">Dentist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-09.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Ronald Jacobs</a></h4>
                    <div class="doc-prof">Oncologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-01.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Albert Sandoval</a></h4>
                    <div class="doc-prof">Neurologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-05.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Diana Bailey</a></h4>
                    <div class="doc-prof">General Surgery</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}l"><img alt="" src="assets/img/doctor-thumb-10.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Shirley Willis</a></h4>
                    <div class="doc-prof">Radiologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}"><img alt="" src="assets/img/doctor-thumb-08.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Pamela Curtis</a></h4>
                    <div class="doc-prof">Pediatrics</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="{{asset('Perfil')}}l"><img alt="" src="assets/img/doctor-thumb-06.jpg"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{asset('EditarP')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{asset('Perfil')}}">Justin Parker</a></h4>
                    <div class="doc-prof">Physical Therapist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="see-all">
                    <a class="see-all-btn" href="javascript:void(0);">Mostrar Mas</a>
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
<script src="{{ asset('/assets/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.fullcalendar.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/js/modal.js') }}"></script>
<script src="{{ asset('/assets/js/popper.min.js') }}"></script>
@endsection
