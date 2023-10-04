<?php

namespace App\Http\Controllers;
use App\Models\persona;
use App\Models\dato_ubicacion;
use App\Models\genero;
use App\Models\especialidad;



use Illuminate\Http\Request;

class AnadirDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AñadirD');
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
        $doctor = new persona();
        $doctor->doc_identidad    = $request->post('doc_identidad');
        $doctor->nombre    = $request->post('nombre');
        $doctor->apellido  = $request->post('apellido');
        $doctor->fecha_nacimiento = $request->post('fecha_nacimiento');
        $doctor->ocupacion      = $request->post('ocupacion');
        $doctor->foto             = $request->post('foto');
        $doctor->save();
        
        $doctor = new genero();
        $doctor->genero            =$request -> post('genero');
        $doctor->save();

        $doctor = new especialidad();
        $doctor->especialidad     =$request-> post('especialidad');
        $especialidad = $doctor->especialidad;
        $doctor->codigo_especialidad= 'COD'.'$especialidad';

        $doctor->save();

        $doctor = new dato_ubicacion();
        $doctor-> estado     = $request-> post('estado');
        $doctor-> municipio  = $request-> post('municipio');
        $doctor-> ciudad     = $request-> post('ciudad');
        $doctor-> parroquia  = $request-> post('parroquia');
        $doctor-> direccion  = $request-> post('direccion');
        $doctor-> telefono   = $request-> post('telefono');
        $doctor-> correo     = $request-> post('correo');
        $doctor->save();


        if ($doctor->save()) {
                return redirect()->route("Doctores");
            }else{
                return redirect()->route("AnadirD");
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
