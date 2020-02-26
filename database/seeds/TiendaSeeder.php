<?php

use App\Tienda;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Tienda::create([
            'nombre' => 'Nvidia Store Madrid',
            'marca' => 'Nvidia',
            'direccion' => 'C/ Sol Madrid',
            'email' => 'nvidia@gmail.com'
        ]);


    }
}
