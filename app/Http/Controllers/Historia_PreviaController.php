<?php

namespace App\Http\Controllers;
use App\Models\Historia_Previa;
use Illuminate\Http\Request;

class Historia_PreviaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historia_previa = Historia_Previa::paginate();
        return view('historia_previa.index', compact('historia_previa'));
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
                'sintomas'=>'required',
                ]);
            $historia_previa = new Historia_Previa(); 
            $historia_previa->sintomas = $request->input('sintomas');
            $historia_previa->save();
            $historia_previa= Historia_Previa::All();
            return view('historia_previa.index', compact('historia_previa')); 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historia_previa = Historia_Previa::find($id);
        return view('historia_previa.show', compact('historia_previa'));
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
