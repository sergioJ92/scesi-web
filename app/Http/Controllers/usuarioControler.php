<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\DB;

class usuarioControler extends Controller
{


    public function index(){

        $usuarios = Usuario::all();


    	return view('usuarios/index',['usuarios' => $usuarios]);
    }

    /**public function show($id){
    	return view('usuarios/show',
    			['id' => $id]);
    }*/


    public function show(Usuario $usuario){

        //$usuario = Usuario::find($id);

        if ($usuario == null){
            return response()->view('errors.404', [], 404);
        }


        return view('usuarios/show', compact('usuario'));

    }

 
    public function create(){
        
        return view('usuarios/crear');
    
    }    


    public function store(){

        $data = request()->all();
        
        Usuario::create([
             'nombres' => $data['nombres'],
             'apellidos' => $data['apellidos'],
             'email' => $data['email'],
             'contrasena' => bcrypt($data['password']),
             'carrera_id' => $data['carrera_id'],
             'rfit_id' => $data['rfit_id'] 
        ]);

        return redirect()->route('usuarios.index');

    }

}
