
@extends('layouts.layout')

@section('title', 'Cita'.$cita)

@section('content')
    <h1>Bienvenido al area de citas {{$cita->id}} </h1>
    <br>
    <a href="/cita" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a Citas...</a>
@endsection