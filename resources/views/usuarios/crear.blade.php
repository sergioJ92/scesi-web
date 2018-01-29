@extends('layout')

@section('content')
	<h3>Crear usuarios</h3>

	<div class="row">
    <form class="col s12" method="POST" action="{{ url('usuarios/crear') }}">
      {{csrf_field()}}
      <fieldset>
        <legend>Datos de usuario</legend>
        <div class="row">
          <div class="input-field col s6">
            <input name="nombres" type="text" class="validate">
            <label for="first_name">Nombres</label>
          </div>
          <div class="input-field col s6">
            <input name="apellidos" type="text" class="validate">
            <label for="last_name">Apellidos</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="password" type="password" class="validate">
            <label for="password">Contrasena</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="re_password" type="password" class="validate">
            <label for="password">Repita Contrasena</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <label>Elije una carrera</label>  
            <select name="carrera_id" class="browser-default">
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Informatica</option>
              <option value="2">Sistemas</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <label>Elije un Rfit</label>  
            <select name="rfit_id" class="browser-default">
              <option value="" disabled selected>Elije un Rfit disponible</option>
              <option value="1">qwer</option>
              <option value="2">qazw</option>
            </select>
          </div>
        </div>
      </fieldset>
      
      <button type="submit" class="waves-effect waves-light btn">Crear</button>
    </form>
  </div>  

	<h4>Esta es la vista donde entrara el formulario de creacion de usuario</h4>
@endsection