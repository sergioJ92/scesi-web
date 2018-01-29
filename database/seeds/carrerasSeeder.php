<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Carrera;

class carrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Carrera::class)->create([
            'carrera' => 'Informatica'
        ]);

        factory(Carrera::class)->create([
            'carrera' => 'Sistemas'
        ]);
        
        factory(Carrera::class,20)->create();
    }
}
