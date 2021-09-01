<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DatosController extends Controller{
    public function index(){
        return view('datos.index');
    }
    public function create(){
        return view('datos.create');
    }
    public function show($dato){
        return view('datos.show',compact('dato'));
    }
}