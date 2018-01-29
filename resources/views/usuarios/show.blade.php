@extends('layout')

@section('content')
	<h3>Vista mostrar usuario</h3>
	<div class="row">

		<div class="col s4">
			<div class="row">
				<div class="col s10 offset-s1">
					<img src="{{ asset('imagenes/usuario_masculino.png') }}" alt="" class="circle">
				</div>		
			</div>
		</div>
		<div class="col s1"></div>
		<div class="col s7">
			<div class="row">
				<span class="title"> Nombre:</span>
				<span id="span_nombres">{{$usuario->nombres}}</span>
			</div>
			<div class="row">
				<span class="title"> Apellido:</span>
				<span id="span_apellidos">{{$usuario->apellidos}}</span>
			</div>
			<div class="row">
				<span class="title"> Carrera:</span>
				<span id="span_carrera">{{$usuario->carrera->carrera}}</span>
			</div>
			<div class="row">
				<span class="title"> Email:</span>
				<span id="span_email">{{$usuario->email}}</span>
			</div>
			<div class="row">
				<span class="title"> Estado del integrante:</span>
				<span id="span_estado">{{'activo'}}</span>
			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col s6 offset-s6">
			<a href="{{ route('usuarios.index') }}">Retroceder</a>
		</div>
	</div>
	<h4>{{'Vista editar usuario numero : '}}{{$usuario->id}}</h4>
@endsection