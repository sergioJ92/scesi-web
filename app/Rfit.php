<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rfit extends Model
{
    protected $fillable = [
    	'codigo_rfit'
    ];

    public function usuarios(){
    	return $this->hasMany(Usuario::class);
    }
}
