<?php

namespace App\Http\Controllers;
use App\Models\estatus;
use App\Models\registrar_tratamiento;

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
        
        $tratamiento = registrar_tratamiento::select('*')
        
        ->get();
        
        return view('RegistrarT',compact('tratamiento'));
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
        
        
         $tratamiento = registrar_tratamiento::create([
            'nom_tratamiento'    => $request->post('nom_tratamiento'),
            'costo_tratamiento'  => $request->post('costo_tratamiento'),
            'codigo_tratamiento' => $request->post('codigo_tratamiento'),
            'fecha_añadido'      => $request->post('fecha_añadido'),
            'especialidad_tratamiento'      => $request->post('especialidad_tratamiento')
         ]);
       

        
        if ($tratamiento!=null) {
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
    public function eliminarT($id)
    {
        $tratamiento = registrar_tratamiento::find($id);
        $tratamiento->delete();
        return redirect()->route("RegistrarT");
    }

    /**
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
