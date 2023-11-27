<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
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
    // public function index()
    // {
    //     return view('RutaT'); 
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $paciente = paciente::with('persona')
        // ->join('personas','pacientes.personas_id','=','pacientes.id')
        // ->get();
        // $estatus_tratamiento           = estatus_tratamiento::all();
        // return view('RutaT',compact('id','estatus_tratamiento'));
    }
    // public function eliminarT($id)
    // {
    //     $paciente_diagnostico = paciente_diagnostico::find($id);
    //     $paciente_diagnostico->delete();
    //     return redirect()->route("RutaT",compact('paciente_diagnostico'));
    // }

    public function buscar($id)
    {
        // SELECT * FROM `paciente_diagnosticos` INNER JOIN registrar_tratamientos ON paciente_diagnosticos.registrar_tratamientos_id = registrar_tratamientos.id;
        $pieza = pieza::all();
        $paciente = paciente::with('persona','expediente','persona.dato_ubicacion')
        ->join('expedientes','expedientes.pacientes_id','=','expedientes.id')
        ->find($id);

       $estatus_tratamiento           = estatus_tratamiento::all();
       $paciente_diagnostico = paciente_diagnostico::with('pieza','estatus_tratamiento','diagnostico','registrar_tratamiento')
        ->join('piezas','paciente_diagnosticos.piezas_id','=','piezas.id')
        ->join('diagnosticos','paciente_diagnosticos.diagnosticos_id','=','diagnosticos.id')
        ->join('registrar_tratamientos','paciente_diagnosticos.registrar_tratamientos_id','=','registrar_tratamientos.id')
        ->join('estatus_tratamientos','paciente_diagnosticos.estatus_tratamientos_id','=','estatus_tratamientos.id')
       
        ->get();
        
        


       $presupuesto= DB::table("paciente_diagnosticos")
       ->where('paciente_diagnosticos.id','=','registrar_tratamientos.id')
       ->get()->sum("registrar_tratamientos.costo_tratamiento");

       

        return view('RutaT', compact('paciente_diagnostico','paciente','estatus_tratamiento', 'presupuesto'));

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


    public function editar($id,$p)
    {
        $paciente = paciente::with('persona','expediente','persona.dato_ubicacion')
        ->join('expedientes','expedientes.pacientes_id','=','expedientes.id')
        ->find($p);

        $paciente_diagnostico = paciente_diagnostico::with('pieza','estatus_tratamiento','diagnostico','registrar_tratamiento')
        ->join('piezas','paciente_diagnosticos.piezas_id','=','piezas.id')
        ->join('diagnosticos','paciente_diagnosticos.diagnosticos_id','=','diagnosticos.id')
        ->join('registrar_tratamientos','paciente_diagnosticos.registrar_tratamientos_id','=','registrar_tratamientos.id')
        ->join('estatus_tratamientos','paciente_diagnosticos.registrar_tratamientos_id','=','registrar_tratamientos.id')
       ->find($id);
       return view('EditarRutaT', compact('paciente_diagnostico','paciente'));
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
        $paciente = paciente::with('persona','expediente','persona.dato_ubicacion')
        ->join('expedientes','expedientes.pacientes_id','=','expedientes.id')
        ->get();
        $paciente_diagnostico = DB::table('estatus_tratamientos')->where('id', $id)
        -> update([
           'estatus'=>$request ->estatus
        ]);
        return redirect()->route('RegistroE',compact('paciente_diagnostico','paciente'));
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
