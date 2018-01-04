<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioAuxiliarController extends Controller
{
    public function index($nombre, $apellido){
    	return view('usuariosAuxiliar/index',
    				['nombre' => $nombre,
    				 'apellido' => $apellido]);
    }

    public function cargo($nombre,$apellido,$cargo = "Empleado medio tiempo",$edad = null){

		return view('usuariosAuxiliar/cargo',
					['nombre' => $nombre,
					 'apellido' => $apellido,
					 'cargo' => $cargo,
					 'edad' => $edad]);
    }
}
