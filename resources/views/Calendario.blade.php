@extends('layouts.plantilla')

@section('title')
<title>Clinident / Agendar Cita</title>
@endsection
@section('css-externo')


@endsection
@section('contenido')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-4">
                <h4 class="page-title">Calendario</h4>
            </div>

            
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tratamiento</a></li>
                <li class="breadcrumb-item"><a href="#">Registrar</a></li>
            </ol>
        </nav>
        <section>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box mb-0">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div id="calendar">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content modal-md">
                                <div class="modal-header">
                                    <h4 class="modal-title">Añadir cita</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-primary submit-btn save-event"> Agendar Cita</button>
                                    <button type="button" class="btn btn-danger btn-lg delete-event" data-dismiss="modal">Borrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
    </div>
</div>
<div id="add_event" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Añadir Cita</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Nombre de la Cita<span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Fecha de la Cita <span class="text-danger">*</span></label>
                        <div class="cal-icon">
                            <input class="form-control datetimepicker" type="datetime">
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Añadir cita</button>
                    </div>
                </form>
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
    
    <script src="{{ asset('/assets/js/translater.js') }}"></script>

    
@endsection
