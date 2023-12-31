<?php

namespace App\Http\Controllers;
use App\Models\persona;
use App\Models\dato_ubicacion;
use App\Models\paciente;
use App\Models\expediente;
use App\Models\tipo_persona;

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
        // $this->validate($request,[
        //     'doc_identidad' => 'required|integer|between:7,9',
        //     'nombre' => 'required|alpha|max:30',
        //     'apellido' => 'required|alpha|max:30',
        //     'fecha_nacimiento' => 'required|date',
        //     'estado' => 'required|alpha|max:30',
        //     'municipio' => 'required|alpha|max:30',
        //     'direccion' => 'required|alpha|max:100',
        //     'telefono' => 'required|integer|between:11,11',
        //     'ocupacion' => 'required|alpha|max:30',
           
     
                 
        //     ]);

        $dato_ubicacion = dato_ubicacion::create([
            
            'estado'     => $request-> post('estado'),
            'municipio'  => $request-> post('municipio'),
            'ciudad'     => $request-> post('ciudad'),
            'parroquia'  => $request-> post('parroquia'),
            'direccion'  => $request-> post('direccion'),
            'telefono'   => $request-> post('telefono'),
            'correo'     => $request-> post('correo'),
            
        ]);
       
        

        $tipo = tipo_persona::where('tipo_persona','Paciente')->first();

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
        


        $paciente = paciente::create([
            'ocupacion'   => $request->post('ocupacion'),
            'personas_id' => $persona->id,
        ]);
        

        
        $expediente = expediente::create([
        'alergia_penicilina'       => $request->post('alergia_penicilina'),
        'desc_alergia_p'           => $request->post('desc_alergia_p'),
        'alergia_medicamento'      => $request->post('alergia_medicamento'),
        'desc_alergia_m'           => $request->post('desc_alergia_m'),
        'trat_actual'              => $request->post('trat_actual'),
        'desc_trat_actual'         => $request->post('desc_trat_actual'),
        'gravidez'                 => $request->post('gravidez'),
        'desc_gravidez'            => $request->post('desc_gravidez'),
        'hemorragia'               => $request->post('hemorragia'),
        'desc_hemorragia'          => $request->post('desc_hemorragia'),
        'desmayos'                 => $request->post('desmayos'),
        'desc_desmayos'            => $request->post('desc_desmayos'),
        'asma'                     => $request->post('asma'),
        'desc_asma'                => $request->post('desc_asma'),
        'diabetes'                 => $request->post('diabetes'),
        'desc_diabetes'            => $request->post('desc_diabetes'),
        'hipertension'             => $request->post('hipertension'),
        'desc_hipertension'        => $request->post('desc_hipertension'),
        'epilepsia'                => $request->post('epilepsia'),
        'desc_epilepsia'           => $request->post('desc_epilepsia'),
        'cancer_actual'            => $request->post('cancer_actual'),
        'desc_cancer_actual'       => $request->post('desc_cancer_actual'),
        'cancer_pasado'            => $request->post('cancer_pasado'),
        'desc_cancer_pasado'       => $request->post('desc_cancer_pasado'),
        'vih'                      => $request->post('vih'),
        'desc_vih'                 => $request->post('desc_vih'),
        'inmunodeficiente'         => $request->post('inmunodeficiente'),
        'desc_inmunodeficiente'    => $request->post('desc_inmunodeficiente'),
        'fumador'                  => $request->post('fumador'),
        'desc_fumador'             => $request->post('desc_fumador'),
        'pacientes_id'             => $paciente->id,
        ]);
        
        
       
      
        if ($paciente!=null) {
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
