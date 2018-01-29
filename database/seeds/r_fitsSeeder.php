<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Rfit;


class r_fitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Rfit::class)->create([
            'codigo_rfit' => 'juynfghjkk78hsdgdsy'
        ]);

        factory(Rfit::class)->create([
            'codigo_rfit' => 'rewsxcv6789oljhweeg'
        ]);

        factory(Rfit::class,48)->create();

    }
}
