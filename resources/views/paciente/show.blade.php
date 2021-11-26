
@extends('layouts.layout')

@section('title', 'Paciente'.$paciente)

@section('content')
    <h1>Bienvenido este es el paciente {{$paciente->nombre}} </h1>
    <br>
    <a href="/paciente" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a usuarios...</a>
@endsection