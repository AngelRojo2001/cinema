@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			@include('alerts.request')
			
			{!! Form::model($user, ['route' => ['usuario.update', $user->id], 'method' => 'PUT']) !!}
				@include('usuario.forms.form')
				{!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}

			{!! Form::open(['route' => ['usuario.destroy', $user->id], 'method' => 'DELETE']) !!}
				{!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection