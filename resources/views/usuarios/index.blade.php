@extends('layout')

@section('content')

	<div class="white">
		<div class="col s12 m11 offset-m1">
			<h3>Lista de usuarios</h1>
		</div>
		<table class="striped">
	        <thead>
		        <tr>
		            <th>Nombre</th>
		            <th>Apellido</th>
		            <th>Carrera</th>
		        </tr>
	        </thead>
		    <tbody>
		    	@if (! empty($usuarios))
					@foreach ($usuarios as $usuario)
					<tr>
						<td>{{$usuario}}</td>
						<td>{{'######'}}</td>
						<td>{{'Informatica'}}</td>
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
    </div>
		
@endsection
