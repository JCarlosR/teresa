<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrators
        User::create([
            'name' => 'Juan Ramos',
            'email' => 'juancagb.17@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 1 // Administrator
        ]);
        User::create([
            'name' => 'Eduardo Esaine',
            'email' => 'edo@seo-arquitectos.com',
            'password' => bcrypt('123123'),
            'role' => 1 // Administrator
        ]);
        User::create([
            'name' => 'Diego Ureta',
            'email' => 'diegoureta1@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 1 // Administrator
        ]);

        User::create([
            'name' => 'Jorge Peña',
            'email' => 'jorgeparq@seo-arquitectos.com',
            'password' => bcrypt('123123'),
            'role' => 1 // Temporary administrator
        ]);

        User::create([
            'name' => 'Roel Ccente',
            'email' => 'roel@seo-arquitectos.com',
            'password' => bcrypt('123123'),
            'role' => 1 // Mini edo - Administrator
        ]);
    }
}
