@extends('layouts.layout')

@section('title', 'Historia_previa')

@section('content')
	<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear una Historia_previa</a></h1>
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
	<form class="form-control" method="POST" action="/historia_previa" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
			<label for="">Sintomas</label>
			<input type="text" name="name" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Guardar Historia_previa</button>
	</form>	
@endsection