<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->eliminarTablas([
            'carreras',
            'rfits',
            'usuarios',
        ]);

        $this->call(carrerasSeeder::class);
        $this->call(r_fitsSeeder::class);
        $this->call(usuariosSeeder::class);
    }

    public function eliminarTablas(array $tablas){

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
