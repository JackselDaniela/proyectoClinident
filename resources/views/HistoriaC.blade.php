@extends('layouts.plantilla')

@section('title')
<title>Clinident / Gestion de Pacientes</title>
@endsection
@section('css-externo')
<link rel="stylesheet" href="assets/css/dentadura.css">
<link rel="stylesheet" href="assets/css/odontograma.css">

@endsection
@section('contenido')
<div class="page-wrapper" style="padding-top:4rem; font-size:1.4rem">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-6">
                <h4 class="page-title" id="inicio">Historia Clinica</h4>
            </div>

        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('Index')}}">Gestion de Paciente</a></li>
                <li class="breadcrumb-item"><a href="{{asset('HistoriaC')}}">Historia Clinica</a></li>
            </ol>
        </nav>
        <div class="row">
            

            <section style="width: 100vw">
                 <!-- BOTON MODAL -->
                <div  class="col-sm-12 col-md-12 text-right m-b-20">
                    <button  class="btn btn-primary float-right btn-rounded btn-press btn-add" style="font-size:1.6rem;!important"><i class="fa fa-plus"></i><a href="{{route('AnadirT')}}" style="color: aliceblue"> Añadir Tratamiento</a></button>
               
                </div>
        
               
                <div class="row filter-row">
                    <div class="col-sm-4 col-md-4">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    
                                    <input class="form-control" style="padding: 2rem;font-size:1.8rem" placeholder="Doc. Identidad" type="text">
                                    <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" style="border-radius: .8rem"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection
