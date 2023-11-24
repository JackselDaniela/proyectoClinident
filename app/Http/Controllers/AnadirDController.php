<?php

namespace App\Http\Controllers;
use App\Models\persona;
use App\Models\dato_ubicacion;
use App\Models\doctor;
use App\Models\especialidad;
use App\Models\tipo_persona;



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
        
        $dato_ubicacion = dato_ubicacion::create([
            
            'estado'     => $request-> post('estado'),
            'municipio'  => $request-> post('municipio'),
            'ciudad'     => $request-> post('ciudad'),
            'parroquia'  => $request-> post('parroquia'),
            'direccion'  => $request-> post('direccion'),
            'telefono'   => $request-> post('telefono'),
            'correo'     => $request-> post('correo'),
            
        ]);
        $tipo = tipo_persona::where('tipo_persona','Doctor')->first();

        $persona = persona::create([
            'doc_identidad'    => $request->post('doc_identidad'),
            'nombre'           => $request->post('nombre'),
            'apellido'         => $request->post('apellido'),
            'fecha_nacimiento' => $request->post('fecha_nacimiento'),
            'genero'           => $request -> post('genero'),
            'foto'             => $request->post('foto'),
            'tipo_personas_id' => $tipo -> id ,
            'dato_ubicacions_id' => $dato_ubicacion -> id ,
        ]);


        $especialidad = especialidad::create([
            'especialidad'       => $request-> post('especialidad'),
            'codigo_especialidad'=> $request-> post('codigo_especialidad'),
    

        ]);
       
        
        $doctor =  doctor::create([

            'universidad'          => $request-> post('universidad'),
            'experiencia'          => $request-> post('experiencia'),
            'bachillerato'          => $request-> post('bachillerato'),
            'destacado'          => $request-> post('destacado'),
            'especialidads_id' => $especialidad -> id ,
            'personas_id' => $persona -> id ,
        ]);
        



        if ($doctor != null) {
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
