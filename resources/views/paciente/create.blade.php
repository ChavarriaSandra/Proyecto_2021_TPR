@extends('layouts.layout')

@section('title', 'Paciente')

@section('content')
	<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear Pacientes</a></h1>
	<br>
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
    <a href="/dashboard" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver...</a><br>
	<form class="form-control" method="POST" action="/paciente" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>
        <div class="form-group">
			<label for="">Apellido</label>
			<input type="text" name="name" class="form-control">
		</div>
        <div class="form-group">
			<label for="">Edad</label>
			<input type="number" name="name" class="form-control">
		</div>
        <div class="form-group">
			<label for="">Genero</label>
			<input type="text" name="name" class="form-control">
		</div>
        <div class="form-group">
			<label for="">Telefono</label>
			<input type="number" name="name" class="form-control">
		</div>
        <div class="form-group">
			<label for="">Calle</label>
			<input type="text" name="name" class="form-control">
		</div>
        <div class="form-group">
			<label for="">Barrio</label>
			<input type="text" name="name" class="form-control">
		</div>
        <div class="form-group">
			<label for="">Ciudad</label>
			<input type="text" name="name" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Guardar Paciente</button>
	</form>	
@endsection