@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			@include('alerts.request')

			{!! Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}
				@include('usuario.forms.form')
				{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection