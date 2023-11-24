@extends('layouts.plantilla')

@section('title')
<title>Clinident / Gestion de Pacientes </title>
@endsection
@section('css-externo')

@endsection
@section('contenido')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Ruta de Tratamiento</h4>
            </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('Index')}}">Gestion Paciente</a></li>
                <li class="breadcrumb-item"><a href="{{asset('RutaT')}}">Ruta de Tratamiento</a></li>
            </ol>
        </nav>

        <section>
            <div class="row filter-row">
                
                <div class="col-sm-4 col-md-4">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="input-group">
                                
                                <input class="form-control" placeholder="Doc. Id. Paciente" type="text">
                                <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" style="border-radius: .8rem"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
        
        <div class="row">
            <div class="col-lg-12" >
                <div class="table-responsive"style="padding-left:1rem;!important; padding-right:1rem;!important; overflow-x:hidden;!important">
                    <table class="table table-striped custom-table mb-0 datatable" >
                        <thead>
                            <tr>
                                <th># Pieza</th>
                                <th>Tratamiento</th>
                                <th>Estatus</th>
                                <th class="text-right">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>11</td>
                                <td>Restauracion</td>
                                <td >
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Pieza En Proceso</a>
                                            <a class="dropdown-item" href="#">Pieza Trabajada</a>
                                            <a class="dropdown-item" href="#">En espera</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-department.html"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_department"><i class="fa fa-trash-o m-r-5"></i> Borrar </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Restauracion</td>
                                <td >
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Pieza En Proceso</a>
                                            <a class="dropdown-item" href="#">Pieza Trabajada</a>
                                            <a class="dropdown-item" href="#">En espera</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-department.html"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_department"><i class="fa fa-trash-o m-r-5"></i> Borrar </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Extraccion</td>
                                <td >
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Pieza En Proceso</a>
                                            <a class="dropdown-item" href="#">Pieza Trabajada</a>
                                            <a class="dropdown-item" href="#">En espera</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-department.html"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_department"><i class="fa fa-trash-o m-r-5"></i> Borrar </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Fractura</td>
                                <td >
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Pieza En Proceso</a>
                                            <a class="dropdown-item" href="#">Pieza Trabajada</a>
                                            <a class="dropdown-item" href="#">En espera</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-department.html"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_department"><i class="fa fa-trash-o m-r-5"></i> Borrar </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Endodoncia</td>
                                <td >
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Pieza En Proceso</a>
                                            <a class="dropdown-item" href="#">Pieza Trabajada</a>
                                            <a class="dropdown-item" href="#">En espera</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-department.html"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_department"><i class="fa fa-trash-o m-r-5"></i> Borrar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Restauracion</td>
                                <td >
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                            New
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Pieza En Proceso</a>
                                            <a class="dropdown-item" href="#">Pieza Trabajada</a>
                                            <a class="dropdown-item" href="#">En espera</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="edit-department.html"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_department"><i class="fa fa-trash-o m-r-5"></i> Borrar </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </section>
        
    </div>
</div>
<div id="delete_department" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Department?</h3>
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
