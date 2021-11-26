<?php

namespace App\Http\Controllers;
use App\Models\Historial_Particular;
use Illuminate\Http\Request;

class Historial_ParticularController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historial_particular = Historial_Particular::paginate();
        return view('historial_particular.index', compact('historial_particular'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historia_previa.create');
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
                'alergia'=>'not required',
                'tipo_sangre'=>'not required'
                ]);
            $historial_particular= new  Historial_particular(); 
            $historial_particular->alergia = $request->input('alergia');
            $historial_particular->tipo_sangre = $request->input('tipo_sangre');
            $historial_particular->save();
            $historial_particular=  Historial_particular::All();
            return view('historial_particular.index', compact('historial_particular')); 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historial_particular= Historial_particular::find($id);
        return view('historial_particular.show', compact('historial_particular'));
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
