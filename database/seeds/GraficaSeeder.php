<?php

use App\Grafica;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraficaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Grafica::create([
            'nombre' => 'Nvidia 2080Ti',
            'modelo' => '2080Ti',
            'compania' => 'Nvidia Corporation',
            'marca' => 'Nvidia',
            'precio' => '1299',
        ]);


    }
}
