<?php
namespace App\Http\Controllers;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = Personal::paginate();
        return view('personal.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.create');
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
            $personal = new Personal(); 
            $personal->nombre = $request->input('nombre');
            $personal->apellido = $request->input('apellido');
            $personal->edad = $request->input('edad');
            $personal->genero = $request->input('genero');
            $personal->telefono = $request->input('telefono');
            $personal->calle= $request->input('calle');
            $personal->barrio = $request->input('barrio');
            $personal->ciudad = $request->input('ciudad');
            $personal->save();
            $personal= Personal::All();
            return view('personal.index', compact('personal')); 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal= Personal::find($id);
        return view('personal.show', compact('personal'));
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