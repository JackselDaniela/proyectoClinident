<?php

namespace App\Http\Controllers;
use App\Models\estatus;
use App\Models\especialidad;
use App\Models\registro_tratamiento;

use Illuminate\Http\Request;

class RegistrarTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RegistrarT');
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
        $tratamiento = new registro_tratamiento();
        $tratamiento->nom_tratamiento    = $request->post('nom_tratamiento');
        $tratamiento->costo_tratamiento  = $request->post('costo_tratamiento');
        $tratamiento->codigo_tratamiento = $request->post('codigo_tratamiento');
        $tratamiento->fecha_añadido      = $request->post('fecha_añadido');
        $tratamiento->save();

        $tratamiento = new estatus();
        $tratamiento->estatus    = $request->post('estatus');
        $tratamiento->save();
        $tratamiento = new especialidad();
        $tratamiento->especialidad    = $request->post('especialidad');
        $tratamiento->save();


        
        if ($tratamiento->save()) {
            return redirect()->route("RegistrarT");
        }else{
            return redirect()->route("RegistrarT");
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
