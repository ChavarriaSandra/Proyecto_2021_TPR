
@extends('layouts.layout')

@section('title', 'Historial particular'.$historia_particular)

@section('content')
    <h1>Bienvenido al area de citas {{$historial_particular->id}} </h1>
    <br>
    <a href="/historial_particular" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver Historial particular...</a>
@endsection