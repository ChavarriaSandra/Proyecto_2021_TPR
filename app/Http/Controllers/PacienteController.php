<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = Paciente::paginate();
        return view('paciente.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre'=>'not required',
            'apellido'=>'not required',
            'edad'=>'not required',
            'genero'=>'not required',
            'telefono'=>'not required',
            'calle'=>'not required',
            'barrio'=>'not required',
            'ciudad'=>'not required'
            ]);
        $paciente = new Paciente(); 
        $paciente->nombre = $request->input('nombre');
        $paciente->apellido = $request->input('apellido');
        $paciente->edad = $request->input('edad');
        $paciente->genero = $request->input('genero');
        $paciente->telefono = $request->input('telefono');
        $paciente->calle= $request->input('calle');
        $paciente->barrio = $request->input('barrio');
        $paciente->ciudad = $request->input('ciudad');
        $paciente->save();
        $paciente= Paciente::All();
        return view('paciente.index', compact('paciente')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente= Paciente::find($id);
        return view('paciente.show', compact('paciente'));
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