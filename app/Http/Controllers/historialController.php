<?php

namespace App\Http\Controllers;

use App\Models\HistorialClinico;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class historialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialesclinicos = HistorialClinico::all();
       
        $pacientes = Paciente::all();

        $medicos = Medico::all();
        
        //return $pacientes;
        return view('historialclinico.index', compact('historialesclinicos','pacientes','medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        return view('historialclinico.create', compact('pacientes','medicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historialesclinicos = new HistorialClinico();
        $historialesclinicos->ocupacion = $request->ocupacion;
        $historialesclinicos->enfermedad_actual = $request->enfermedad_actual;
        $historialesclinicos->alergias = $request->alergias;
        $historialesclinicos->enfermedad_herencia = $request->enfermedad_herencia;
        $historialesclinicos->tipo_sangre = $request->tipo_sangre;
        $historialesclinicos->tabaquismo = $request->tabaquismo;
        $historialesclinicos->alcoholismo = $request->alcoholismo;
        $historialesclinicos->drogodependencias = $request->drogodependencias;


        $historialesclinicos->id_paciente = $request->id_paciente;
        $historialesclinicos->id_medico = $request->id_medico;

        activity()->useLog('HistorialClinico')->log('Registr;o')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $historialesclinicos->id;
        $lastActivity->save();
      
        $historialesclinicos->save();
        return redirect()->route('historialesclinicos.index');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historia = HistorialClinico::find($id);
        
        
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        //$documentos = Documento::all();

        return view('Historialclinico.edit', compact('historia', 'pacientes','medicos'));
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
        $historialesclinicos = HistorialClinico::find($id);
        
       
        
        $historialesclinicos->id_paciente = $request->id_paciente;
        $historialesclinicos->id_medico = $request->id_medico;
        $historialesclinicos->save();

        
        
        activity()->useLog('HistorialClinico')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $historialesclinicos->id;
        $lastActivity->save();

        return redirect()->route('historialesclinicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
