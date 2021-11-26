@extends('layouts.layout')

@section('title', 'Agenda')

@section('content')
	<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear Agendas</a></h1>
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
	<form class="form-control" method="POST" action="/agenda" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
			<label for="">Estado</label>
			<input type="text" name="name" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>	
@endsection