<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       


        factory(User::class)->create([
            'name' => 'Carlos García Mármol',
            'email' => 'carlos@moviles.com',
            'password' => bcrypt('laravel'),
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            
        ]);

        factory(User::class, 48)->create();
    }
}
