
@extends('layouts.layout')

@section('title', 'Historia_previa'.$historia_previa)

@section('content')
    <h1>Bienvenido al area de citas {{$historia_previa->id}} </h1>
    <br>
    <a href="/historia_previa" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a Historia_Previa...</a>
@endsection