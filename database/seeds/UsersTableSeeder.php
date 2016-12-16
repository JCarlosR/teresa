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

    }
}
