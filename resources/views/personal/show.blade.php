
@extends('layouts.layout')

@section('title', 'Personal'.$personal)

@section('content')
    <h1>Bienvenido este es el usuario {{$personal->nombre}} </h1>
    <br>
    <a href="/personal" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a usuarios...</a>
@endsection