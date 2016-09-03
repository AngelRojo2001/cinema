@extends('layouts.admin')

@section('content')
	<form action="">
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Correo</label>
			<input type="text" name="" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Contraseña</label>
			<input type="password" name="" class="form-control">
		</div>
		<button class="btn btn-primary">Registrar</button>
	</form>
@endsection