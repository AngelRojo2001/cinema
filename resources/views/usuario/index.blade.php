@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			@include('alerts.success')
			
			<table class="table">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Operación</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<a href="{{ route('usuario.edit', [$user->id]) }}" class="btn btn-primary">Editar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			{{ $users->links() }}
		</div>
	</div>
@endsection