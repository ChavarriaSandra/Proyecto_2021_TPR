
@extends('layouts.layout')

@section('title', 'Agenda'.$agenda)

@section('content')
    <h1>Bienvenido este es el paciente {{$agenda->id}} </h1>
    <br>
    <a href="/agenda" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a Agenda...</a>
@endsection