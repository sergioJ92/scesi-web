<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //aca especificas las consultas de base de datos que tu mismo as cread
    // normalmente entra el modulo CRUD

    // public $timestamp = false;    // se usa cuando no queremos guardar los datos de creado y accualizar las fechas
	protected $fillable = [
    	'nombres',
    	'apellidos',
    	'email',
    	'contrasena',
    	'carrera_id',
    	'rfit_id',
    ];


	public function carrera(){
		return $this->belongsTo(Carrera::class);
	}

    public function rfit(){
        return $this->belongsTo(Rfit::class);
    }

    

}
