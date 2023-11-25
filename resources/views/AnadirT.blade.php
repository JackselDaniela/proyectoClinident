@extends('layouts.plantilla')

@section('title')
<title>Clinident / Gestion de Pacientes</title>
@endsection
@section('css-externo')
<link rel="stylesheet" href="{{asset('assets/css/dentadura.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/odontograma.css')}}">

@endsection
@section('contenido')
<div class="page-wrapper" style="padding: 0 0.5rem; padding-top:4rem; height:auto!important; font-size:1.4rem">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Añadir Tratamiento</h4>
            </div>

            

        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('Index')}}">Gestion de Pacientes</a></li>
                <li class="breadcrumb-item"><a href="{{asset('HistoriaC')}}">Historia Clinica</a></li>
                <li class="breadcrumb-item"><a href="{{asset('AnadirT')}}">Añadir Tratameinto</a></li>
            </ol>
        </nav>
        <a href="{{route('HistoriaC.buscar',$paciente->id)}}"><button style="font-size: 1.3rem" class="btn btn-primary float-right btn-rounded btn-press btn-add" >Ver Expediente</button></a>

        <div class="row">
             
            
            <div class="col-sm-5 col-md-5">
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group"> 
                            <input class="form-control" style="padding: 2rem;font-size:1.4rem" value="Paciente : {{$paciente->persona->nombre." ".$paciente->persona->apellido}}" placeholder="Ex:25976000" type="text" disabled>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-5 col-md-5">
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control" style="padding: 2rem;font-size:1.4rem" placeholder="Dr.Andrea Donato" value="Dr.Andrea Donato" type="text" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2">
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group"> 
                            <input class="form-control" type="hidden" style="padding: 2rem;font-size:1.8rem" value=" {{$paciente->id}}" placeholder="Ex:25976000" type="text" disabled>
                            
                        </div>
                    </div>
                </div>
            </div>
           
           
            
            
            <section  style="justify-content: center; margin-left:25%;margin-right:25%">
                <div class="modal-content " style="justify-content: center">
        
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2" style="text-align: center; margin: 0px!important;" >
                                
                                <ul style="list-style:none; display:flex; padding-top: 2rem;padding-left: 2rem; justify-content:space-between">
                                    <li>
                                        <h3 style="margin-bottom:-3.5rem; width:max-content;">Seleccione la Pieza</h3>
                                    </li>
                                </ul>
                                
                            </div>
                                   
                        </div>
                        <div class="contenedor-dentadura" id="dentadura-completa">
                           
                            <div class="row" >
                                 {{-- @foreach ($pieza as $pieza)   --}}
{{--                                     
                                 {{$pieza->nom_pieza}}
                                 {{$pieza->nom_pieza}}
                                 {{$pieza->nom_pieza}}
                                 {{$pieza->nom_pieza}}
                                 {{$pieza->nom_pieza}}
                                 {{$pieza->nom_pieza}}
                                 {{$pieza->nom_pieza}}
                                 {{$pieza->nom_pieza}} --}}
                                <img class="dentadura" src="{{asset('assets/img/boca/dentadura.png')}}"  alt="">
                                 <!-- Maxilar superior izq -->
                                <a id="p11" href="{{route('Odontograma.store',$paciente)}}" title="Pieza 11"><img class="p11 pieza" src="{{asset('assets/img/boca/piezas/11pieza.png')}}" alt=""><input type="hidden" value="p11"></a>
                                <a id="p12" href="{{route('Odontograma.store',$paciente)}}" title="Pieza 12"><img class="p12 pieza" src="{{asset('assets/img/boca/piezas/12pieza.png')}}" alt=""></a>
                                <a id="p13" href="{{route('Odontograma.store',$paciente)}}" title="Pieza 13"><img class="p13 pieza" src="{{asset('assets/img/boca/piezas/13pieza.png')}}" alt=""></a>
                                <a id="p14" href="{{route('Odontograma.store',$paciente)}}" title="Pieza 14"><img class="p14 pieza" src="{{asset('assets/img/boca/piezas/14pieza.png')}}" alt=""></a>
                                <a id="p15" href="{{route('Odontograma.store',$paciente)}}" title="Pieza 15"><img class="p15 pieza" src="{{asset('assets/img/boca/piezas/15pieza.png')}}" alt=""></a>
                                <a id="p16" href="{{route('Odontograma.store',$paciente)}}" title="Pieza 16"><img class="p16 pieza" src="{{asset('assets/img/boca/piezas/16pieza.png')}}" alt=""></a>
                                <a id="p17" href="{{route('Odontograma.store',$paciente)}}" title="Pieza 17"><img class="p17 pieza" src="{{asset('assets/img/boca/piezas/17pieza.png')}}" alt=""></a>
                                <a id="p18" href="{{route('Odontograma.store',$paciente)}}" title="Pieza 18"><img class="p18 pieza" src="{{asset('assets/img/boca/piezas/18pieza.png')}}" alt=""></a>
                                
                                <!-- Maxilar superior derecho -->
                                <a id="p21" href="{{route('Odontograma')}}" title="Pieza 21"><img class="p21 pieza" src="{{asset('assets/img/boca/piezas/21pieza.png')}}" alt=""></a>
                                <a id="p22" href="{{route('Odontograma')}}" title="Pieza 22"><img class="p22 pieza" src="{{asset('assets/img/boca/piezas/22pieza.png')}}" alt=""></a>
                                <a id="p23" href="{{route('Odontograma')}}" title="Pieza 23"><img class="p23 pieza" src="{{asset('assets/img/boca/piezas/23pieza.png')}}" alt=""></a>
                                <a id="p24" href="{{route('Odontograma')}}" title="Pieza 24"><img class="p24 pieza" src="{{asset('assets/img/boca/piezas/24pieza.png')}}" alt=""></a>
                                <a id="p25" href="{{route('Odontograma')}}" title="Pieza 25"><img class="p25 pieza" src="{{asset('assets/img/boca/piezas/25pieza.png')}}" alt=""></a>
                                <a id="p26" href="{{route('Odontograma')}}" title="Pieza 26"><img class="p26 pieza" src="{{asset('assets/img/boca/piezas/26pieza.png')}}" alt=""></a>
                                <a id="p27" href="{{route('Odontograma')}}" title="Pieza 27"><img class="p27 pieza" src="{{asset('assets/img/boca/piezas/27pieza.png')}}" alt=""></a>
                                <a id="p28" href="{{route('Odontograma')}}" title="Pieza 28"><img class="p28 pieza" src="{{asset('assets/img/boca/piezas/28pieza.png')}}" alt=""></a>  
                              
                                 <!-- Maxilar inferior izq -->
                    
                               <a id="p41" href="{{route('Odontograma')}}" title="Pieza 41"><img class="p41 pieza-2" src="{{asset('assets/img/boca/piezas/41pieza.png')}}" alt=""></a>
                               <a id="p42" href="{{route('Odontograma')}}" title="Pieza 42"><img class="p42 pieza-2" src="{{asset('assets/img/boca/piezas/42pieza.png')}}" alt=""></a>
                               <a id="p43" href="{{route('Odontograma')}}" title="Pieza 43"><img class="p43 pieza-2" src="{{asset('assets/img/boca/piezas/43pieza.png')}}" alt=""></a>
                               <a id="p45" href="{{route('Odontograma')}}" title="Pieza 45"><img class="p45 pieza-2" src="{{asset('assets/img/boca/piezas/45pieza.png')}}" alt=""></a>
                               <a id="p44" href="{{route('Odontograma')}}" title="Pieza 44"><img class="p44 pieza-2" src="{{asset('assets/img/boca/piezas/44pieza.png')}}" alt=""></a>
                               <a id="p46" href="{{route('Odontograma')}}" title="Pieza 46"><img class="p46 pieza-2" src="{{asset('assets/img/boca/piezas/46pieza.png')}}" alt=""></a>
                               <a id="p47" href="{{route('Odontograma')}}" title="Pieza 48"><img class="p48 pieza-2" src="{{asset('assets/img/boca/piezas/48pieza.png')}}" alt=""></a>
                               <a id="p48" href="{{route('Odontograma')}}" title="Pieza 47"><img class="p47 pieza-2" src="{{asset('assets/img/boca/piezas/47pieza.png')}}" alt=""></a>
                              
                               <!-- Maxilar inferior derecho -->
                               <a id="p31" href="{{route('Odontograma')}}" title="Pieza 31" ><img class="p31 pieza-2" src="{{asset('assets/img/boca/piezas/31pieza.png')}}" alt=""></a>
                               <a id="p32" href="{{route('Odontograma')}}" title="Pieza 32"><img class="p32 pieza-2" src="{{asset('assets/img/boca/piezas/32pieza.png')}}" alt=""></a>
                               <a id="p33" href="{{route('Odontograma')}}" title="Pieza 33"><img class="p33 pieza-2" src="{{asset('assets/img/boca/piezas/33pieza.png')}}" alt=""></a>
                               <a id="p34" href="{{route('Odontograma')}}" title="Pieza 34"><img class="p34 pieza-2" src="{{asset('assets/img/boca/piezas/34pieza.png')}}" alt=""></a>
                               <a id="p35" href="{{route('Odontograma')}}" title="Pieza 35"><img class="p35 pieza-2" src="{{asset('assets/img/boca/piezas/35pieza.png')}}" alt=""></a>
                               
                               <a id="p37" href="{{route('Odontograma')}}" title="Pieza 37"><img class="p37 pieza-2" src="{{(asset('assets/img/boca/piezas/37pieza.png'))}}" alt=""></a>
                               <a id="p36" href="{{route('Odontograma')}}" title="Pieza 36"><img class="p36 pieza-2" src="{{asset('assets/img/boca/piezas/36pieza.png')}}" alt=""></a>
                               <a id="p38" href="{{route('Odontograma')}}" title="Pieza 38"><img class="p38 pieza-2" src="{{asset('assets/img/boca/piezas/38pieza.png')}}" alt=""></a>
                              {{-- @endforeach   --}}
                            </div>
                            <div  style="justify-content: center">
                                <div class="card-box">
                                    <h4 class="card-title">Prótesis</h4>
                                    <form action="#">
                                       
                                        <div class="form-group row">
                                            <label class=" col-sm-4" style="font-size: 1.3rem">Tipo de Prótesis</label>
                                            <div class="col-md-8">
                                                <select class="form-control">
                                                    <option value="No Especifica">-- Seleccione --</option>
                                                    <option value="Protesis-Total Acrilica" >Protesis-Total Acrilica</option>
                                                    <option value="Protesis-Removible Acrilica" >Protesis-Removible Acrilica</option>
                                                   
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-4">Piezas Involucradas</label>
                                            <div class="col-md-8">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary  btn-rounded btn-press btn-add" maxlength="100" style="list-style: none; color: aliceblue;">Guardar</button>

                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </section>
         


        </div>
        

    </div>
    
</div>

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
<script type="module" src="{{ asset('/resources/js/dienticos/piezas.js') }}"></script>
@endsection
