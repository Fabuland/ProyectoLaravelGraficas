<?php

use App\User;
use App\Profession;
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
        //$professions = DB::select('SELECT id FROM professions WHERE title = ?', ['Desarrollador back-end']);


        factory(User::class)->create([
            'name' => 'Carlos García',
            'email' => 'carlos@graficas.net',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'name' => 'Pepe García',
            'email' => 'pepe@graficas.net',
            'password' => bcrypt('234567'),
            'is_admin' => true,
        ]);

        factory(User::class, 48)->create();
    }
}
