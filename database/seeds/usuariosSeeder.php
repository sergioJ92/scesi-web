<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Carrera;
use App\Rfit;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$carrera = Carrera::where('carrera','Informatica')->value('id');

    	$rfit = Rfit::where('codigo_rfit','rewsxcv6789oljhweeg')->value('id');	

    	Usuario::create([
    		'nombres' => 'Sergio Joaquin',
        	'apellidos' => 'Fernandez Marza',
        	'email' => 'jeral.sergio@gmail.com',
        	'contrasena' => bcrypt('123'),
        	'carrera_id' => $carrera,
        	'rfit_id' => $rfit
    	]);

      factory(Usuario::class)->create([
          'nombres' => 'Natsu',
          'apellidos' => 'Dragnel',
          'email' => 'Natzu@gmail.com',
          'contrasena' => bcrypt('123'),
          'carrera_id' => 1,
          'rfit_id' => 3  
      ]);
      factory(Usuario::class)->create([
          'nombres' => 'Erza',
          'apellidos' => 'Escarlet',
          'email' => 'Erza@gmail.com',
          'contrasena' => bcrypt('123'),
          'carrera_id' => 2,
          'rfit_id' => 1  
      ]);
      factory(Usuario::class)->create([
          'nombres' => 'jeral',
          'apellidos' => 'Fernandez',
          'email' => 'jeral@gmail.com',
          'contrasena' => bcrypt('123'),
          'carrera_id' => 1,
          'rfit_id' => 8  
      ]);
      factory(Usuario::class)->create([
          'nombres' => 'Lucy',
          'apellidos' => 'Heartfilia',
          'email' => 'Lucy@gmail.com',
          'contrasena' => bcrypt('123'),
          'carrera_id' => 2,
          'rfit_id' => 7  
      ]);
      factory(Usuario::class)->create([
          'nombres' => 'Urthear',
          'apellidos' => 'Lokenster',
          'email' => 'Urthear@gmail.com',
          'contrasena' => bcrypt('123'),
          'carrera_id' => 1,
          'rfit_id' => 9    
      ]);

    	//factory(Usuario::class,10)->create([]);

      //  DB::table('usuarios')->insert([
      //  	'nombres' => 'Sergio Joaquin',
      //  	'apellidos' => 'Fernandez Marza',
      //  	'email' => 'jeral.sergio@gmail.com',
      //  	'contrasena' => bcrypt('123'),
      //  	'carrera_id' => $carrera,
      //  	'rfit_id' => $rfit
      //  ]);
    }
}
