<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class medicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index',compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medico = new Medico();
        $medico->nombre = $request->input('nombre');
        $medico->direccion = $request->input('direccion');
        $medico->area_desemp = $request->input('area_desemp');
        $medico->telefono = $request->input('telefono');
        
        $medico->save();
        
        $user = new User();
        $user->name = $medico->nombre;
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->id_p = $medico->id;
        $user->assignRole('Medico');
        $user->save();

        activity()->useLog('medico')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $medico->id;
        $lastActivity->save();

      
        return redirect()->route('medicos.index', compact('medico'));

        
   
           
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
        $medico=Medico::findOrFail($id);
        return view('medicos.edit',compact('medico'));

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
        $medico=Medico::findOrFail($id);
        $medico->nombre = $request->input('nombre');
        $medico->direccion = $request->input('direccion');
        $medico->area_desemp = $request->input('area_desemp');
        $medico->telefono = $request->input('telefono');
        $medico->save();
     
        $user = User::where('id_p',$medico->id)->first();
        $user->name = $medico->nombre;
        $user->save();

        activity()->useLog('medico')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $medico->id;
        $lastActivity->save();


        return redirect()->route('medicos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);
        $medico->delete();

        $user = User::where('id_p', $medico->id);
        $user->delete();

        activity()->useLog('medico')->log('Eliminó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $medico->id;
        $lastActivity->save();

        return redirect()->route('medicos.index');



    }
}
