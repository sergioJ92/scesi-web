<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioControler extends Controller
{


    public function index(){

    	if(request()->has('empty')){

    		$usuarios = [];

    	}else{
    		$usuarios = ['Natsu','Lucy','Erza','Gray','Jeral'];
    	}

    	return view('usuarios/index',['usuarios' => $usuarios]);
    }

    public function show($id){
    	return view('usuarios/show',
    			['id' => $id]);
    }

    public function create(){
    	return view('usuarios/crear');
    }
}
