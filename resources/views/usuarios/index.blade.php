@extends('layout')

@section('content')

	
	<div class="col s12 m11 offset-m1">
		<h3>Lista de usuarios</h1>
	</div>
	<table class="striped">
        <thead>
	        <tr>
	            <th>Nombre</th>
	            <th>Apellido</th>
	            <th>Carrera</th>
	            <th>Rfit</th>
	        </tr>
        </thead>
	    <tbody>
	    	@if (! empty($usuarios))
				@foreach ($usuarios as $usuario)
				<tr>
					<td>{{$usuario->nombres}}</td>
					<td>{{$usuario->apellidos}}</td>
					<td>{{$usuario->carrera->carrera}}</td>
					<td>{{$usuario->rfit->codigo_rfit}}</td>
					<td>
						<a href="{{ route('usuarios.show', ['id' => $usuario->id ] ) }}"> Acceder </a>
					</td>
				</tr>
				@endforeach
			@else
				<p>No existen usuarios registrados</p>
			@endif
	    </tbody>
    </table>
    <div class="row">
    	<p class="center-align">Aca entrara la paginacion</p>
    </div>
		
@endsection
