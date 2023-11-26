<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\dato_ubicacion;
use App\Models\especialidad;
use App\Models\paciente;
use App\Models\expediente;
use App\Models\pieza;
use App\Models\estatus_tratamiento;
use App\Models\registrar_tratamiento;
use App\Models\diagnostico;
use App\Models\paciente_diagnostico;

class RutaTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RutaT'); 
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
    public function eliminarT($id)
    {
        $paciente_diagnostico = paciente_diagnostico::find($id);
        $paciente_diagnostico->delete();
        return redirect()->route("RutaT");
    }

    public function buscar($id)
    {
        // SELECT * FROM `paciente_diagnosticos` INNER JOIN registrar_tratamientos ON paciente_diagnosticos.registrar_tratamientos_id = registrar_tratamientos.id;
        $pieza = pieza::all();
        $paciente = paciente::with('persona','expediente','persona.dato_ubicacion')
        ->join('expedientes','expedientes.pacientes_id','=','expedientes.id')
        ->find($id);

        
       $paciente_diagnostico = paciente_diagnostico::with('pieza','estatus_tratamiento','diagnostico','registrar_tratamiento')
        ->join('piezas','paciente_diagnosticos.piezas_id','=','piezas.id')
        ->join('diagnosticos','paciente_diagnosticos.diagnosticos_id','=','diagnosticos.id')
        ->join('registrar_tratamientos','paciente_diagnosticos.registrar_tratamientos_id','=','registrar_tratamientos.id')
        ->get();
        return view('RutaT', compact('paciente_diagnostico','paciente'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
