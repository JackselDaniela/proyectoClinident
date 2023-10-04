<?php

namespace App\Http\Controllers;
use App\Models\persona;
use App\Models\dato_ubicacion;
use App\Models\genero;
use App\Models\expediente;

use Illuminate\Http\Request;

class AnadirPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AñadirP');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new persona();
        $paciente->doc_identidad    = $request->post('doc_identidad');
        $paciente->nombre           = $request->post('nombre');
        $paciente->apellido         = $request->post('apellido');
        $paciente->fecha_nacimiento = $request->post('fecha_nacimiento');
        $paciente->ocupacion        = $request->post('ocupacion');
        $paciente->foto             = $request->post('foto');
        $paciente->save();

        $paciente = new genero();
        $paciente->genero            =$request -> post('genero');
        $paciente->save();

        $paciente = new dato_ubicacion();
        $paciente-> estado     = $request-> post('estado');
        $paciente-> municipio  = $request-> post('municipio');
        $paciente-> ciudad     = $request-> post('ciudad');
        $paciente-> parroquia  = $request-> post('parroquia');
        $paciente-> direccion  = $request-> post('direccion');
        $paciente-> telefono   = $request-> post('telefono');
        $paciente-> correo     = $request-> post('correo');
        $paciente->save();

        $paciente = new expediente();
        $paciente->alergia_penicilina       = $request->post('alergia_penicilina');
        $paciente->desc_alergia_p           = $request->post('desc_alergia_p');
        $paciente->alergia_medicamento      = $request->post('alergia_medicamento');
        $paciente->desc_alergia_m           = $request->post('desc_alergia_m');
        $paciente->trat_actual              = $request->post('trat_actual');
        $paciente->desc_trat_actual         = $request->post('desc_trat_actual');
        $paciente->gravidez                 = $request->post('gravidez');
        $paciente->desc_gravidez            = $request->post('desc_gravidez');
        $paciente->hemorragia               = $request->post('hemorragia');
        $paciente->desc_hemorragia          = $request->post('desc_hemorragia');
        $paciente->desmayos                 = $request->post('desmayos');
        $paciente->desc_desmayos            = $request->post('desc_desmayos');
        $paciente->asma                     = $request->post('asma');
        $paciente->desc_asma                = $request->post('desc_asma');
        $paciente->diabetes                 = $request->post('diabetes');
        $paciente->desc_diabetes            = $request->post('desc_diabetes');
        $paciente->hipertension             = $request->post('hipertension');
        $paciente->desc_hipertension        = $request->post('desc_hipertension');
        $paciente->epilepsia                = $request->post('epilepsia');
        $paciente->desc_epilepsia           = $request->post('desc_epilepsia');
        $paciente->cancer_actual            = $request->post('cancer_actual');
        $paciente->desc_cancer_actual       = $request->post('desc_cancer_actual');
        $paciente->cancer_pasado            = $request->post('cancer_pasado');
        $paciente->desc_cancer_pasado       = $request->post('desc_cancer_pasado');
        $paciente->vih                      = $request->post('vih');
        $paciente->desc_vih                 = $request->post('desc_vih');
        $paciente->inmunodeficiente         = $request->post('inmunodeficiente');
        $paciente->desc_inmunodeficiente    = $request->post('desc_inmunodeficiente');
        $paciente->fumador                  = $request->post('fumador');
        $paciente->desc_fumador             = $request->post('desc_fumador');
        $paciente->save();

        if ($paciente->save()) {
                return redirect()->route("RegistroE");
            }else{
                return redirect()->route("AnadirP");
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
