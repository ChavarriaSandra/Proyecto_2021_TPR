<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        $cita = Cita::paginate();
        return view('cita.index', compact('cita'));
    }

    public function create()
    {
        return view('cita.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fecha_cita'=>'required',
            'Hora_cita'=>'not required'
            ]);
        $cita = new Cita(); 
        $cita->fecha = $request->input('fecha_cita');
        $cita->horario = $request->input('Hora_cita');
        $cita->save();
        $cita= Cita::All();
        return view('cita.index', compact('cita')); 
    }

    public function show($id)
    {
        $cita = Cita::find($id);
        return view('cita.show', compact('cita'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
