
@extends('layouts.layout')

@section('title', 'Cargo'.$cargo)

@section('content')
    <h1>Bienvenido al area de citas {{$cargo->cargo}} </h1>
    <br>
    <a href="/cargo" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a Cargo...</a>
@endsection